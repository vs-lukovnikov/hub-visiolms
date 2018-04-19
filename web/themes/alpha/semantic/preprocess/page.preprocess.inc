<?php

use Drupal\Core\Render\Element;
/**
 * Implements hook_preprocess_HOOK().
 *
 * @param $variables
 */
function semantic_preprocess_page(&$variables) {

//  // Improves pages by routes.
//  $routes = ['user.login', 'user.register', 'user.pass'];
//  if (in_array(\Drupal::routeMatch()->getRouteName(), $routes)) {
//
//    $children = Element::children($variables['page']['content']);
//
//    $variables['page']['content']['content_container'] = [
//      '#type' => 'container',
//      '#attributes' => [
//        'class' => ['ui', 'very', 'padded', 'raised', 'text', 'secondary', 'container', 'segment'],
//      ],
//    ];
//
//    foreach ($children as $child) {
//      $variables['page']['content']['content_container'][$child] = $variables['page']['content'][$child];
//      unset($variables['page']['content'][$child]);
//    }
//
//  }

}
