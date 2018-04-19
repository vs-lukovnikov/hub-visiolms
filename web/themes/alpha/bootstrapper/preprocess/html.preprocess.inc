<?php

/**
 * Implements hook_preprocess_HOOK().
 *
 * @param $variables
 */
function bootstrapper_preprocess_html(&$variables) {
  $regions = \Drupal::theme()->getActiveTheme()->getRegions();

  foreach ($regions as $region_name) {
    $region_class = str_replace('_', '-', $region_name);

    if (!empty($variables['page'][$region_name]) && isset($variables['page'][$region_name]['#region'])) {
      $variables['attributes']['class'][] = 'layout--has-' . $region_class;
    }
    else {
      $variables['attributes']['class'][] = 'layout--has-no-' . $region_class;
    }
  }

  // Add information about the number of sidebars.
  if (!empty($variables['page']['sidebar_first']) && !empty($variables['page']['sidebar_second'])) {
    $variables['attributes']['class'][] = 'layout--two-sidebars';
  }
  elseif (!empty($variables['page']['sidebar_first'])) {
    $variables['attributes']['class'][] = 'layout--one-sidebar';
    $variables['attributes']['class'][] = 'layout--sidebar-first';
  }
  elseif (!empty($variables['page']['sidebar_second'])) {
    $variables['attributes']['class'][] = 'layout--one-sidebar';
    $variables['attributes']['class'][] = 'layout--sidebar-second';
  }
  else {
    $variables['attributes']['class'][] = 'layout--no-sidebars';
  }

  // Add specific class to node page.
  if ($node = \Drupal::request()->attributes->get('node')) {
    // If the variable $node is string, suspecting it's a node ID,
    // then load node by ID.
    if (is_string($node)) {
      $node = \Drupal\node\Entity\Node::load($node);
    }
    $variables['attributes']['class'][] = 'page--node--' . $node->bundle();
    $variables['attributes']['class'][] = 'page--node-' . $node->id();
  }

  // Add specific class to user page.
  if ($user = \Drupal::request()->attributes->get('user')) {
    if (is_object($user)) {
      $variables['attributes']['class'][] = 'page--user-' . $user->id();
    }
    else {
      $variables['attributes']['class'][] = 'page--user-' . $user;
    }
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
