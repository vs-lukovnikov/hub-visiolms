<?php

/**
 * Implements hook_preprocess_HOOK().
 */
function semantic_preprocess_item_list(&$variables) {
  $variables['attributes']['class'] = ['ui', 'list'];
}