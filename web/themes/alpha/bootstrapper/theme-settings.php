<?php

use Drupal\Core\Form\FormStateInterface;

/**
 * Implementation of hook_form_system_theme_settings_alter()
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 *
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */
function bootstrapper_form_system_theme_settings_alter(&$form, FormStateInterface $form_state) {

  // Get the build info for the form.
  $build_info = $form_state->getBuildInfo();
  // Get the theme name we are editing.
  $theme = $build_info['args'][0];

  // Custom settings in Vertical Tabs container
  $form['configuration'] = array(
    '#type' => 'vertical_tabs',
    '#weight' => -999,
    '#default_tab' => 'core',
  );

  // Include the adjustments to core system theme settings.
  include_once 'settings/core.php';

  // Include the container settings.
  include_once 'settings/container.php';

  // Include the images settings.
  include_once 'settings/images.php';

  // Include the ability to debug various theme development elements.
  include_once 'settings/debug.php';

  // Change the text for default submit button.
  $form['actions']['submit']['#value'] = t('Save');

  // Add appropriate validate & submit hooks.
  $form['#validate'][] = 'bootstrapper_theme_settings_validate';
  $form['#submit'][] = 'bootstrapper_theme_settings_submit';
}

/**
 * Default theme settings validation handler.
 *
 * @param $form
 * @param $form_state
 */
function bootstrapper_theme_settings_validate(&$form, FormStateInterface $form_state) {
  // Get all the values of the submitted form.
  $values = $form_state->getValues();
}

/**
 * Default theme settings submit handler.
 *
 * @param $form
 * @param \Drupal\Core\Form\FormStateInterface $form_state
 */
function bootstrapper_theme_settings_submit(&$form, FormStateInterface $form_state) {
  // Get all the values of the submitted form.
  $values = $form_state->getValues();
}
