<?php

/**
 * Adding Bootstrap 4 specific classes to tables.
 * Implements hook_preprocess_HOOK().
 *
 * @param $variables
 */
function bootstrapper_preprocess_table(&$variables) {
  $variables['attributes']['class'][] = 'table';
}