<?php

$form['images'] = [
  '#type' => 'details',
  '#title' => t('Images'),
  '#group' => 'configuration',
  '#tree' => TRUE,
];

$form['images']['responsive'] = array(
  '#type' => 'checkbox',
  '#title' => t('Responsive images'),
  '#default_value' => theme_get_setting('images.responsive', $theme),
  '#group' => 'images',
);
