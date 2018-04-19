<?php

/**
 * Implements hook_preprocess_HOOK().
 *
 * @param $variables
 */
function semantic_preprocess_html(&$variables) {
  // Theme regions.
  $regions = \Drupal::theme()->getActiveTheme()->getRegions();

  // Add specific classes to regions.
  foreach ($regions as  $region_name) {
    $region_class = str_replace('_', '-', $region_name);

    if (!empty($variables['page'][$region_name]) && isset($variables['page'][$region_name]['#region'])) {
      $variables['attributes']['class'][] = 'page--has-' . $region_class;
    }
    else {
      $variables['attributes']['class'][] = 'page--has-no-' . $region_class;
    }
  }

  // Add information about the number of sidebars.
  if (!empty($variables['page']['sidebar_first']) && !empty($variables['page']['sidebar_second'])) {
    $variables['attributes']['class'][] = 'page--has-two-sidebars';
  }
  elseif (!empty($variables['page']['sidebar_first'])) {
    $variables['attributes']['class'][] = 'page--has-one-sidebar';
  }
  elseif (!empty($variables['page']['sidebar_second'])) {
    $variables['attributes']['class'][] = 'page--has-one-sidebar';
  }
  else {
    $variables['attributes']['class'][] = 'page--has-no-sidebars';
  }

  // Add specific class to node page.
  if ($node = \Drupal::request()->attributes->get('node')) {
    $variables['attributes']['class'][] = 'page--node-' . $node->id();
  }

  // Add specific class to Page Manager pages.
  if ($pm_page = \Drupal::request()->attributes->get('page_manager_page')) {
    $variables['attributes']['class'][] = 'page--pm';
    $variables['attributes']['class'][] = 'page--pm--' . str_replace('_', '-', $pm_page->id());
  }
  if ($pm_page_variant = \Drupal::request()->attributes->get('page_manager_page_variant')) {
    $variables['attributes']['class'][] = 'page--pm-variant';
    $variables['attributes']['class'][] = 'page--pm-variant--' . str_replace('_', '-', $pm_page_variant->id());
  }

  // Add specific class to pages with breadcrumbs.
  if ($breadcrumb = \Drupal::request()->attributes->get('breadcrumb')) {
    $variables['attributes']['class'][] = 'page--has-breadcrumb';
  }

  // Add specific class to the page based on HttpException.
  if ($exception = \Drupal::request()->attributes->get('exception')) {
    if ($code = $exception->getStatusCode()) {
      $variables['attributes']['class'][] = 'page--error-' . $code;
    }
  }

}
