<?php

/**
 * @file
 * Theme settings form for Drupal Business theme.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function drupal_business_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['drupal_business'] = [
    '#type' => 'details',
    '#title' => t('Drupal Business'),
    '#open' => TRUE,
  ];

  $form['drupal_business']['font_size'] = [
    '#type' => 'number',
    '#title' => t('Font size'),
    '#min' => 12,
    '#max' => 18,
    '#default_value' => theme_get_setting('font_size'),
  ];

}
