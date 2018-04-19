<?php

/**
 * Adding Bootstrap 4 specific classes depending on type of the input.
 * Implements hook_preprocess_HOOK().
 *
 * @param $variables
 */
function bootstrapper_preprocess_input(&$variables) {
  // Get element type.
  $element_type = $variables['attributes']['type'];
  // Set classes for elements if they are present on the page.
  switch ($element_type) {
    case 'submit':
      // Submit button.
      $variables['attributes']['class'][] = 'btn';
      $variables['attributes']['class'][] = 'btn-primary';
      break;

    case 'search':
      // Search input.
      $variables['attributes']['class'][] = 'form-control';
      break;

    case 'email':
      // Email input.
      $variables['attributes']['class'][] = 'form-control';
      break;

    case 'password':
      // Password input.
      $variables['attributes']['class'][] = 'form-control';
      break;

    case 'text':
      // Text input.
      $variables['attributes']['class'][] = 'form-control';
      break;

    case 'date':
      // Date input.
      $variables['attributes']['class'][] = 'form-control';
      break;

    case 'file':
      // File input.
      $variables['attributes']['class'][] = 'form-control-file';
      break;

    case 'checkbox':
      // Checkbox inputs.
      $variables['attributes']['class'][] = 'form-check-input';
      break;

    case 'radio':
      // Radio inputs.
      $variables['attributes']['class'][] = 'form-check-input';
      break;
  }
}