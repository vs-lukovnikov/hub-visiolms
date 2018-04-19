<?php

$form['container'] = [
  '#type' => 'details',
  '#title' => t('Container'),
  '#group' => 'configuration',
  '#tree' => TRUE,
];

$form['container']['type'] = [
  '#type' => 'select',
  '#title' => t('Container type'),
  '#options' => [
    'no' => t('No container'),
    'fixed' => t('Fixed'),
    'fluid' => t('Fluid'),
  ],
  '#default_value' => theme_get_setting('container.type', $theme),
  '#group' => 'container',
];
