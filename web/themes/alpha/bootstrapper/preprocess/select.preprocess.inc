<?php

/**
 * Adding Bootstrap 4 specific classes to select input.
 * Implements hook_preprocess_HOOK().
 *
 * @param $variables
 */
function bootstrapper_preprocess_select(&$variables) {
  $variables['attributes']['class'][] = 'form-control';
}