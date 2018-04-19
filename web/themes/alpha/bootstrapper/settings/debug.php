<?php

$form['debug'] = [
  '#type' => 'details',
  '#title' => t('Debug'),
  '#group' => 'configuration',
  '#tree' => TRUE,
];

$form['debug']['debug'] = array(
  '#type' => 'checkbox',
  '#title' => t('Enable debug mode'),
  '#default_value' => theme_get_setting('debug.debug', $theme),
  '#group' => 'debug',
);
