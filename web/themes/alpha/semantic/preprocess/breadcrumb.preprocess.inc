<?php

/**
 * Implements hook_preprocess_HOOK().
 *
 * @param $variables
 */
function semantic_preprocess_breadcrumb(&$variables){
  if (isset($variables['breadcrumb']) && count($variables['breadcrumb']) > 0) {
    \Drupal::request()->attributes->set('breadcrumb', $variables['breadcrumb']);
  }
}
