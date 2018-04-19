<?php

/**
 * Implements hook_preprocess_HOOK().
 *
 * @param $variables
 */
function semantic_preprocess_form(&$variables) {

  $variables['attributes']['class'][] = 'ui';
  // $variables['attributes']['class'][] = 'fluid';
  // $variables['attributes']['class'][] = 'huge';
  $variables['attributes']['class'][] = 'form';

}
