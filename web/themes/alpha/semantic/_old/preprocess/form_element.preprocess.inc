<?php

/**
 * Implements hook_preprocess_HOOK().
 *
 * @param $variables
 */
function semantic_preprocess_form_element(&$variables) {

  // Add classes for checkbox.
  if (isset($variables['type']) && $variables['type'] == 'checkbox') {
    $variables['attributes']['class'][] = 'ui';
    $variables['attributes']['class'][] = 'checkbox';
  }

  // Add classes for radio.
  if (isset($variables['type']) && $variables['type'] == 'radio') {
    $variables['attributes']['class'][] = 'ui';
    $variables['attributes']['class'][] = 'radio';
  }

  // Add classes for password textfield.
  if (isset($variables['type']) && $variables['type'] == 'password') {
    $variables['attributes']['class'][] = 'text';
  }

  //Add classes for details.
  if (isset($variables['type']) && $variables['type'] == 'details') {
    $variables['attributes']['class'][] = 'ui';
    $variables['attributes']['class'][] = 'styled';
    $variables['attributes']['class'][] = 'accordion';
  }
  
  // Add classes for descriptions of these elements: text, textarea, select.
  $types = ['textfield', 'textarea', 'select', 'date', 'file', 'managed_file', 'password', 'password_confirm', 'item'];
  if (isset($variables['type']) && in_array($variables['type'], $types)) {
    $variables['attributes']['class'][] = 'field';
    if (isset($variables['description']['attributes'])) {
      $variables['description']['attributes']->addClass(['ui', 'pointing', 'label']);
    }
  }

}

