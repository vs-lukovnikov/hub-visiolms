<?php

/**
 * Implements hook_preprocess_HOOK().
 *
 * @param $variables
 */
function semantic_preprocess_menu(&$variables) {
  // Improve Main menu.
  if ($variables['menu_name'] === 'main') {
    $variables['attributes']['class'][] = 'ui';
    $variables['attributes']['class'][] = 'large';
    $variables['attributes']['class'][] = 'secondary';
    $variables['attributes']['class'][] = 'menu';
    $variables['attributes']['class'][] = 'stackable';
  }
}
