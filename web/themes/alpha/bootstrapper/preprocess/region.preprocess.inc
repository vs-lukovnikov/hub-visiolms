<?php

use Drupal\Core\Template\Attribute;

/**
 * Implements hook_preprocess_HOOK().
 *
 * @param $variables
 */
function bootstrapper_preprocess_region(&$variables) {
  $variables['attributes_wrapper'] = new Attribute();
  $variables['attributes_body'] = new Attribute();
}
