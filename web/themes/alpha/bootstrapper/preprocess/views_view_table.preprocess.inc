<?php

/**
 * Implements hook_preprocess_HOOK().
 *
 * @param $variables
 */
function bootstrapper_preprocess_views_view_table(&$variables) {
  $variables['attributes']['class'][] = 'table';
}
