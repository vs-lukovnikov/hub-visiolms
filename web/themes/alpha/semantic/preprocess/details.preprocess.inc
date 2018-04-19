<?php

function semantic_preprocess_details(&$variables) {
  $variables['attributes']['class'][] = 'ui';
  $variables['attributes']['class'][] = 'styled';
  $variables['attributes']['class'][] = 'accordion';
}
