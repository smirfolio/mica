<?php
/**
 * @file
 * Mica Datasets variable pages.
 */

/**
 * Form builder to reorder variables within a Dataset
 *
 * @ingroup forms
 * @see mica_datasets_reorder_variables_submit()
 * @see theme_mica_datasets_reorder_variables()
 */
function mica_datasets_reorder_variables($form, $form_state, $dataset_node) {
  $form['#dataset'] = $dataset_node;
  $form['#tree'] = TRUE;

  $query = new EntityFieldQuery();
  $results = $query->entityCondition('entity_type', 'node')
    ->entityCondition('bundle', 'variable')
    ->fieldCondition('field_dataset', 'nid', $dataset_node->nid)
    ->fieldOrderBy("field_position", 'value', "asc")
    ->fieldOrderBy("title_field", 'value', "asc")
    ->execute();
  $variables = $results['node'];
  if (!empty($variables)) {
//    $variables = entity_load('node', array_keys($results['node']));
    $delta = (int) (count($variables) / 2);
    foreach ($variables as $variable) {
      $nid = $variable->nid;
      $wrapper = entity_metadata_wrapper('node', $nid);
      $form[$nid]['#variable'] = $variable;
      $form[$nid]['name'] = array('#markup' => check_plain($wrapper->title->value()));
      $form[$nid]['label'] = array('#markup' => check_plain($wrapper->field_label->value()));
      $form[$nid]['weight'] = array(
        '#type' => 'weight',
        '#title' => t('Weight for @title', array('@title' => $wrapper->title->value())),
        '#title_display' => 'invisible',
        '#delta' => $delta,
        '#default_value' => $wrapper->field_position->value(),
      );
      $form[$nid]['edit'] = array(
        '#type' => 'link',
        '#title' => t('edit'),
        '#href' => 'node/' . $nid . '/edit',
      );
      $form[$nid]['delete'] = array(
        '#type' => 'link',
        '#title' => t('delete'),
        '#href' => 'node/' . $nid . '/delete',
        '#options' => array('query' => drupal_get_destination()), // returns to current page after delete
      );
    }
    // Only make this form include a submit button and weight if more than one variable exists.
    if (count($variables) > 1) {
      $form['actions'] = array('#type' => 'actions');
      $form['actions']['submit'] = array('#type' => 'submit', '#value' => t('Save'));
    }
    elseif (isset($nid)) {
      unset($form[$nid]['weight']);
    }
  }

  return $form;
}

/**
 * Returns HTML for the variables overview form as a sortable list of variables.
 *
 * @param $variables
 *   An associative array containing:
 *   - form: A render element representing the form.
 *
 * @see mica_datasets_reorder_variables()
 * @ingroup themeable
 */
function theme_mica_datasets_reorder_variables($variables) {

  $form = $variables['form'];
  $dataset = $form['#dataset'];
  $rows = array();

  foreach (element_children($form) as $key) {
    if (isset($form[$key]['name'])) {
      $variable = &$form[$key];

      $row = array();
      $row[] = drupal_render($variable['name']);
      $row[] = drupal_render($variable['label']);
      if (isset($variable['weight'])) {
        $variable['weight']['#attributes']['class'] = array('variable-weight');
        $row[] = drupal_render($variable['weight']);
      }
      $row[] = drupal_render($variable['edit']);
      $row[] = drupal_render($variable['delete']);
      $rows[] = array('data' => $row, 'class' => array('draggable'));
    }
  }

  $header = array(t('Name'), t('Label'));
  if (isset($form['actions'])) {
    $header[] = t('Weight');
    drupal_add_tabledrag('variable', 'order', 'sibling', 'variable-weight');
  }
  $header[] = array('data' => t('Operations'), 'colspan' => '2');

  $empty = t(
    'No variables found for @dataset. <a href="@link">Add new variable</a>.', array(
      '@dataset' => $dataset->title,
      '@link' => url('node/add/variable', array('query' => array('dataset' => $dataset->nid))),
    )
  );

  $output = theme(
    'table', array(
      'header' => $header,
      'rows' => $rows,
      'empty' => $empty,
      'attributes' => array('id' => 'variable')
    )
  );
  $output .= drupal_render_children($form);
  return $output;
}

/**
 * Submit handler for variable ordering. Updates changed variable position.
 *
 * @see mica_datasets_reorder_variables()
 */
function mica_datasets_reorder_variables_submit($form, &$form_state) {
  mica_dataset_dataset_variables_batch($form_state['values']);
}

function mica_dataset_dataset_variables_batch($variables) {
  $operations = array();
  // build the list of operation functions and function arguments
  foreach ($variables as $nid => $variable) {
    if (is_numeric($nid)) {
      $operations[] = array('mica_dataset_dataset_update_varaible_weight', array($nid, $variable['weight']));
    }
  }
  //  build the batch instructions
  $batch = array(
    'operations' => $operations,
    'file' => drupal_get_path('module', 'mica_datasets') . '/mica_datasets.pages.variables.inc',
    'finished' => 'mica_dataset_dataset_variables_finish_batch',
  );
  batch_set($batch);

}

function mica_dataset_dataset_update_varaible_weight($nid, $weight, &$context) {
  $node = node_load($nid);
  $wrapper = entity_metadata_wrapper('node', $nid);
  $position = $wrapper->field_position->value();
  $context['message'] = t('Processing variable "@title"', array('@title' => $node->title));

  if ($position != $weight) {

    //   update field_data_field_position
    db_update('field_data_field_position')
      ->fields(array(
        'field_position_value' => $weight,
      ))
      ->condition('entity_id', $nid)
      ->execute();

    // search for last revision of current node variable
    $result = db_select('field_revision_field_position', 'r')
      ->condition('entity_id', $nid)
      ->fields('r', array('revision_id'))
      ->orderBy('revision_id', 'DESC')
      ->range(0, 1)
      ->execute()
      ->fetchAssoc();

    //update last revision of current variable
    db_update('field_revision_field_position')
      ->condition('entity_id', $nid)
      ->condition('revision_id', $result['revision_id'])
      ->fields(array(
        'field_position_value' => $weight,
      ))
      ->execute();
  }
}

function mica_dataset_dataset_variables_finish_batch($success, $results, $operations) {
  if ($success) {
    drupal_set_message(t('The variable order has been saved.'));
  }
  else {
    // An error occurred.
    // $operations contains the operations that remained unprocessed.
    $error_operation = reset($operations);
    drupal_set_message(t('An error occurred while processing @operation with arguments : @args', array(
      '@operation' => $error_operation[0],
      '@args' => print_r($error_operation[0], TRUE)
    )));
  }
}
