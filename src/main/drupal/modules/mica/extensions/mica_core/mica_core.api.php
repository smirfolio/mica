<?php

/**
 * @file
 * Hooks provided by the Mica Datasets module.
 */


/**
 * Defines one or more operations to import taxonomies.
 */
function hook_taxonomies_operations_import() {
  $operations = array();
  return $operations;
}

/**
 *
 */
function hook_bootstrap_based_theme() {
  return array('theme_name' => TRUE);
}