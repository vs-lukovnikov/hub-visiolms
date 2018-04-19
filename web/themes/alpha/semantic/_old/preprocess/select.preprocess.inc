<?php

/**
 * Implements hook_preprocess_HOOK().
 *
 * @param $variables
 */

function semantic_preprocess_select(&$variables) {
  if ($variables['element']['#type'] == 'select') {
    $variables['attributes']['class'][] = 'ui';
    $variables['attributes']['class'][] = 'selection';
    $variables['attributes']['class'][] = 'dropdown';
  }
}
