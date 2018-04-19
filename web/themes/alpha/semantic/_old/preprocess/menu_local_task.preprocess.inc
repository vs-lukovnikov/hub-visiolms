<?php

/**
 * Implements hook_preprocess_HOOK().
 *
 * @param $variables
 */
function semantic_preprocess_menu_local_task(&$variables) {
  $variables['attributes']['class'][] = 'item';
  if (isset($variables['is_active']) && $variables['is_active']) {
    $variables['attributes']['class'][] = 'active';
  }
}
