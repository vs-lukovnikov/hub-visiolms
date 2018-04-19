<?php

/**
 * Implements hook_preprocess_HOOK().
 */
function semantic_preprocess_image_widget(&$variables) {
  $variables['data']['upload_button']['#attributes']['class'][] = 'button-upload-file';
  $variables['data']['remove_button']['#attributes']['class'][] = 'button-remove-file';

}