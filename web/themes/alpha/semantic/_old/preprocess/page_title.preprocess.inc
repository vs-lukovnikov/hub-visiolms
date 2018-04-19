<?php

/**
 * Implements hook_preprocess_HOOK().
 *
 * @param $variables
 */
function semantic_preprocess_page_title(&$variables) {
  $variables['title_attributes']['class'] = ['ui', 'dividing', 'header'];
}

