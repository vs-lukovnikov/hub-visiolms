<?php

/**
 * Implements hook_preprocess_HOOK().
 */
function semantic_preprocess_input__file(&$variables) {
  $variables['#attached']['library'][] = 'semantic/semantic.file_input';
}