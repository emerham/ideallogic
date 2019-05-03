<?php

/**
 * Admin configure form for Ideal-Logic.
 */
function ideallogic_admin_configure() {
  $form['ideallogic_api_key'] = [
    '#type' => 'textfield',
    '#title' => t('Ideal-logic API Key'),
    '#default_value' => variable_get('ideallogic_api_key', ''),
    '#description' => t('Your Ideal-logic API Key.'),
    '#required' => TRUE,
  ];

  return system_settings_form($form);
}
