<?php

/**
 * Implements hook_preprocess_HOOK().
 *
 * @param $variables
 */
function semantic_preprocess_table(&$variables) {
  $variables['attributes']['class'][] = 'ui';
  $variables['attributes']['class'][] = 'single';
  $variables['attributes']['class'][] = 'line';
  $variables['attributes']['class'][] = 'table';
}