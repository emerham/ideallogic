<?php

/**
 * @file
 * The administrative form.
 */

/**
 * Admin configure form for Ideal-Logic.
 */
function ideallogic_admin_configure() {
  $form['ideallogic_registration_endpoint'] = [
    '#type' => 'textfield',
    '#title' => t('Ideal-logic Registration API'),
    '#default_value' => variable_get('ideallogic_registration_endpoint', ''),
    '#description' => t('Please enter your Ideal-logic registrations API endpoint.'),
    '#maxlength' => 1028,
    '#required' => TRUE,
  ];
  $form['ideallogic_program_id'] = [
    '#type' => 'select',
    '#title' => t('Course ID'),
    '#description' => t('Select a Program to filter on for the course list.'),
    '#options' => _build_options_array(),
    '#required' => TRUE,
    '#access' => empty(variable_get('ideallogic_registration_endpoint')) ? FALSE : TRUE,
    '#disabled' => empty(variable_get('ideallogic_registration_endpoint')) ? TRUE : FALSE,
    '#default_value' => variable_get('ideallogic_program_id'),
  ];

  return system_settings_form($form);
}
