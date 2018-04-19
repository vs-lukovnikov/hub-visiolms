<?php

/**
 * Adding Semantic UI specific classes depending on type of the input.
 *
 * Implements hook_preprocess_HOOK().
 *
 * @param array $variables
 *   Array with current element parameters.
 */
function semantic_preprocess_input(array &$variables) {
  // Get element type.
  $element_type = $variables['attributes']['type'];
  // Setting classes for elements if they exist on the page.
  switch ($element_type) {
    case 'text':
      $variables['attributes']['class'][] = 'ui';
      $variables['attributes']['class'][] = 'input';
      break;

    case 'button':
      // Attaching Semantic UI classes for buttons.
      $variables['attributes']['class'][] = 'ui';
      $variables['attributes']['class'][] = 'button';
      break;

    case 'submit':
      // Attaching Semantic UI classes for submit buttons.
      $variables['attributes']['class'][] = 'ui';
      $variables['attributes']['class'][] = 'primary';
      $variables['attributes']['class'][] = 'button';
      break;
  }
}
