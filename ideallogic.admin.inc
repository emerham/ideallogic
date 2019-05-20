<?php

/**
 * @file
 * The administrative form.
 */

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
  $form['ideallogic_program_id'] = [
    '#type' => 'select',
    '#title' => t('Course ID'),
    '#description' => t('Select a Program to filter on for the course list.'),
    '#options' => _build_options_array(),
    '#required' => TRUE,
    '#disabled' => empty(variable_get('ideallogic_api_key')) ? TRUE : FALSE,
    '#default_value' => variable_get('ideallogic_program_id'),
  ];

  return system_settings_form($form);
}
