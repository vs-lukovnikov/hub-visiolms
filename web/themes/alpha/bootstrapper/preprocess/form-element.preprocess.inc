<?php

/**
 * Adding Bootstrap 4 specific classes to form elements.
 * Implements hook_preprocess_HOOK().
 *
 * @param $variables
 */
function bootstrapper_preprocess_form_element(&$variables) {
  // Add special class to form element.
  $variables['attributes']['class'][] = 'form-group';

  $element_type = $variables['type'];
  switch ($element_type) {

    // Tune up checkbox and radio form elements.
    case 'checkbox':
    case 'radio':
      $variables['attributes']['class'][] = 'form-check';
      $variables['label']['#attributes']['class'][] = 'form-check-label';
      break;

  }

  // Add classes to description item of the form element.
  if (isset($variables['description']['attributes'])) {
    $variables['description']['attributes']->addClass('form-text text-muted');
  }

}