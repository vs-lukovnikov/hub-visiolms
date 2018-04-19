<?php

/**
 * Implements hook_preprocess_HOOK().
 *
 * @param $variables
 */
function bootstrapper_preprocess_breadcrumb(&$variables) {
  // Get last index from breadcrumb.
  $last_index = count($variables['breadcrumb']) - 1;
  // Set class value to last element of collection. It is provide data
  // about active element of breadcrumbs in template.
  // For more information see breadcrumb.html.twig in templates/navigation path.
  $variables['breadcrumb'][$last_index]['attributes']['class'] = ' active';

}