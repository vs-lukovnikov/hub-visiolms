<?php

/**
 * Implements hook_preprocess_HOOK().
 *
 * @param $variables
 */
function semantic_preprocess_status_messages(&$variables) {
  // Add semantic ui classes for message.
  $variables['attributes']['class'][] = 'ui';
  $variables['attributes']['class'][] = 'message';
  // Attaches messages library, that add closing element to the message.
  $variables['#attached']['library'][] = 'semantic/semantic.messages';
}