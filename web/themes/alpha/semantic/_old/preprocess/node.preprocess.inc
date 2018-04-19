<?php

/**
 * Implements hook_preprocess_HOOK().
 *
 * @param $variables
 */
function semantic_preprocess_node(&$variables) {
  $variables['debug'] = TRUE;
}
