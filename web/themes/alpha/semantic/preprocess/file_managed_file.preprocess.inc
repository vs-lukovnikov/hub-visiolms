<?php

/**
 * Implements hook_preprocess_HOOK().
 */
function semantic_preprocess_file_managed_file(&$variables) {
  $variables['element']['upload_button']['#attributes']['class'][] = 'button-upload-file';
  $variables['element']['remove_button']['#attributes']['class'][] = 'button-remove-file';
}