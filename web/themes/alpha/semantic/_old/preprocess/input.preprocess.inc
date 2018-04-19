<?php

/** * Implements hook_preprocess_HOOK().
 *
 * @param $variables
 */
function semantic_preprocess_input(&$variables) {

  // Add class for button type element.
  if ($variables['element']['#type'] == 'button') {
    $variables['attributes']['class'][] = 'ui';
    $variables['attributes']['class'][] = 'blue';
  }

  // Add class for submit type element.
  if ($variables['element']['#type'] == 'submit') {
    $variables['attributes']['class'][] = 'ui';
    $variables['attributes']['class'][] = 'blue';
  }

}
