<?php

/**
 * @file
 * Theme settings form for Drupal Community theme.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function drupal_community_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['drupal_community'] = [
    '#type' => 'details',
    '#title' => t('Drupal Community'),
    '#open' => TRUE,
  ];

  $form['drupal_community']['font_size'] = [
    '#type' => 'number',
    '#title' => t('Font size'),
    '#min' => 12,
    '#max' => 18,
    '#default_value' => theme_get_setting('font_size'),
  ];

}
