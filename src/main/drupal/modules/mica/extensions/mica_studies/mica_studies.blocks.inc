<?php

function _mica_studies_block_study_general_info($study) {
  // $study can be the study nid
  if (is_numeric($study)) {
    $study = node_load($study);
  }
  $weight = 0;
  $content = array(
    field_view_field('node', $study, 'field_acroym', array('label' => 'inline', 'weight' => ++$weight)),
    field_view_field('node', $study, 'field_website', array('label' => 'inline', 'weight' => ++$weight)),
    field_view_field('node', $study, 'field_investigators', array('label' => 'inline', 'weight' => ++$weight)),
    field_view_field('node', $study, 'field_contacts_ref', array('label' => 'inline', 'weight' => ++$weight)),
    field_view_field('node', $study, 'field_study_start_date', array('label' => 'inline', 'weight' => ++$weight)),
    field_view_field('node', $study, 'field_study_end_date', array('label' => 'inline', 'weight' => ++$weight)),
  );
  return array(
    'subject' => t('General Information'),
    'content' => $content,
  );
}

function _mica_studies_block_study_access($study) {
  // $study can be the study nid
  if (is_numeric($study)) {
    $study = node_load($study);
  }
  $weight = 0;
  $content = array(
    field_view_field('node', $study, 'field_access_data', array('label' => 'inline', 'weight' => ++$weight)),
    field_view_field('node', $study, 'field_access_biosamples', array('label' => 'inline', 'weight' => ++$weight)),
  );
  $other = _mica_studies_simulate_other_specify_field($study, 'field_access_other', 'field_access_other_sp', ++$weight);
  if (!empty($other)) {
    $content[] = $other;
  }
  return array(
    'subject' => t('Access'),
    'content' => $content,
  );
}

function _mica_studies_block_study_marker_paper($study) {
  // $study can be the study nid
  if (is_numeric($study)) {
    $study = node_load($study);
  }

  $wrapper = entity_metadata_wrapper('node', $study);
  $marker_paper = $wrapper->field_marker_paper->value();
  $pubmedid = $wrapper->field_pubmedid->value();
  $weight = 0;
  $content = empty($marker_paper) && empty($pubmedid)
    ? NULL
    : array(
      field_view_field('node', $study, 'field_marker_paper', array('label' => 'inline', 'weight' => ++$weight)),
      field_view_field('node', $study, 'field_pubmedid', array(
          'label' => 'inline',
          'type' => 'mica_pubmed_url',
          'weight' => ++$weight
        )
      ),
    );
  return array(
    'subject' => t('Marker Paper'),
    'content' => $content,
  );
}

function _mica_studies_block_study_documents($study) {
  // $study can be the study nid
  if (is_numeric($study)) {
    $study = node_load($study);
  }

  $wrapper = entity_metadata_wrapper('node', $study);
  $docs = $wrapper->field_supp_infos->value();
  $content = empty($docs)
    ? NULL
    : array(field_view_field('node', $study, 'field_documents', array('label' => 'hidden')));
  return array(
    'subject' => t('Documents'),
    'content' => $content,
  );
}

function _mica_studies_block_study_supp_infos($study) {
  // $study can be the study nid
  if (is_numeric($study)) {
    $study = node_load($study);
  }

  $wrapper = entity_metadata_wrapper('node', $study);
  $supp_infos = $wrapper->field_supp_infos->value();
  $content = empty($supp_infos)
    ? NULL
    : array(field_view_field('node', $study, 'field_supp_infos', array('label' => 'hidden')));
  return array(
    'subject' => t('Supplementary Information'),
    'content' => $content,
  );
}

function _mica_studies_simulate_other_specify_field($node, $field_other, $field_specify, $weight) {
  $wrapper = entity_metadata_wrapper('node', $node);
  $other = $wrapper->{$field_other}->value();
  if (empty($other)) {
    return NULL;
  }

  $field = field_view_field('node', $node, $field_other, array('label' => 'inline', 'weight' => $weight));
  $other_sp = $wrapper->{$field_specify}->value();
  if (!empty($other_sp)) {
    $field_specify_view = field_view_field('node', $node, $field_specify);
    $field[0]['#markup'] .= ' - ' . $field_specify_view[0]['#markup'];
  }
  return $field;
}