<?php

require_once(drupal_get_path('module', 'taxonomy_csv') . '/import/taxonomy_csv.import.api.inc');

function _mica_datasets_taxonomies() {
  return array(
    array('anthropometric_structures.csv', 'Anthropometric structures'),
    array('body_functions.csv', 'Body functions'),
    array('body_structures.csv', 'Body structures'),
    array('data_source.csv', 'Data source'),
    array('disease_history.csv', 'Diseases history and related health problems'),
    array('early_life.csv', 'Participant\'s early life/Childhood'),
    array('essence.csv', 'Essence'),
    array('life_habits_behaviours.csv', 'Life habits/Behaviours'),
    array('measure.csv', 'Measure'),
    array('medical_health_intervention.csv', 'Medical health interventions/Health services utilization'),
    array('medication.csv', 'Medication'),
    array('perception_of_health.csv', 'Perception of health/Quality of life'),
    array('period.csv', 'Period'),
    array('physical_environment.csv', 'Physical environment'),
    array('reproductive_history.csv', 'Reproductive health and history'),
    array('social_environment.csv', 'Social environment'),
    array('sociodemographic_characteristics.csv', 'Sociodemographic/Socioeconomic characteristics'),
    array('target.csv', 'Target'),
  );
}

function _mica_datasets_taxonomies_operations_import() {
  $operations = array();
  foreach (_mica_datasets_taxonomies() as $taxonomy) {
    $operations[] = array('_mica_datasets_taxonomy_import', $taxonomy);
  }
  return $operations;
}

function _mica_datasets_taxonomy_create($filename, $vocabulary_name) {

  // use filename (without extension) for vocabulary machine name
  $machine_name = substr($filename, 0, strlen($filename) - 4);
  $vocabulary = (object) array(
    'name' => $vocabulary_name,
    'machine_name' => $machine_name,
    'vid' => null,
  );

  $taxonomies = taxonomy_vocabulary_get_names();
  if (array_key_exists($machine_name, $taxonomies)) {
    $vocabulary->vid = $taxonomies[$machine_name]->vid;
  } else {
    taxonomy_vocabulary_save($vocabulary);
  }

  return $vocabulary;
}

function _mica_datasets_taxonomy_import($filename, $vocabulary_name) {

  $vocabulary = _mica_datasets_taxonomy_create($filename, $vocabulary_name);

  $path = drupal_get_path('module', 'mica_datasets') . '/taxonomies/' . $filename;
  $file_path = drupal_realpath($path);

  $result = taxonomy_csv_import(array(
    'import_format' => 'tree',
    'delimiter' => ',',
    'enclosure' => '"',
    'keep_order' => true,
    'file' => (object) array(
      'filename' => $filename,
      'filepath' => $file_path,
      'filesize' => filesize($path)
    ),
    'vocabulary_target' => 'existing',
    'vocabulary_id' => $vocabulary->vid,
    'source_choice' => 'file',
  ));

  watchdog('mica', 'Imported taxonomy %file to vocabulary %vocabulary: %result',
    array(
      '%file' => $file_path,
      '%vocabulary' => $vocabulary_name,
      '%result' => $result,
    ), WATCHDOG_INFO);

}