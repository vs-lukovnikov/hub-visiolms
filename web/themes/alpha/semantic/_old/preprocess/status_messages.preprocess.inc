<?php

/**
 * Implements hook_preprocess_HOOK().
 *
 * @param $variables
 */
function semantic_preprocess_status_messages(&$variables) {
    $variables['attributes']['class'][] = 'ui';
    $variables['attributes']['class'][] = 'message';

    if (isset($variables['message_list']['warning'])) {
        $variables['attributes']['class'][] = 'warning';
    }
    if (isset($variables['message_list']['error'])) {
        $variables['attributes']['class'][] = 'negative';
    }
    if (isset($variables['message_list']['status'])) {
        $variables['attributes']['class'][] = 'positive';
    }
}
