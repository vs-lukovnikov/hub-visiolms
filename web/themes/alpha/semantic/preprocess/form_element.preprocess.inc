<?php

/**
 * Implements hook_preprocess_HOOK().
 *
 * @param $variables
 */
function semantic_preprocess_form_element(&$variables) {

  // Add classes for textfield.
  if ($variables['element']['#type'] == 'text') {
    $variables['attributes']['class'][] = 'ui';
    $variables['attributes']['class'][] = 'input';
  }

  // Add classes for textarea.
  if ($variables["element"]["#type"] === 'textarea') {
    $variables['attributes']['class'][] = 'ui';
    $variables['attributes']['class'][] = 'form';
  }

  // Add classes for checkbox.
  if (isset($variables['type']) && $variables['type'] == 'checkbox') {
    $variables['attributes']['class'][] = 'ui';
    $variables['attributes']['class'][] = 'checkbox';
  }

  // Add classes for radio.
  if (isset($variables['type']) && $variables['type'] == 'radio') {
    $variables['attributes']['class'][] = 'ui';
    $variables['attributes']['class'][] = 'radio';
    $variables['attributes']['class'][] = 'checkbox';
  }

  // Add classes to field description.
  if (isset($variables['description']['attributes'])) {
    $variables['description']['attributes']->addClass(['ui']);
  }

}

