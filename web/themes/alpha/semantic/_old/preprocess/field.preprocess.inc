<?php

/**
 * Implements hook_preprocess_HOOK() for field templates.
 * @param array $vars
 */
function semantic_preprocess_field(&$vars) {
  $field_type = $vars['field_type'];

  if ($field_type == 'entity_reference') {
    foreach ($vars['items'] as $field_name => $field) {
      if (!empty($field['content']['#options']['entity_type']) && $field['content']['#options']['entity_type'] == 'taxonomy_term') {
        // add a class to the <a>
        $vars['items'][$field_name]['content']['#options']['attributes']['class'] = array('taxonomy-term');
        // add a class to the field item wrapper
        $vars['items'][$field_name]['attributes']->addClass('field-item--taxonomy-term');
        // add a class to the outer field wrapper
        $vars['attributes']['class'][] = 'field--taxonomy-terms';
        $vars['attributes']['class'][] = 'clearfix';
      }
    }
  }
}
