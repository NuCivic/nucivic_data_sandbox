<?php
/**
 * @file
 * Theme settings.
 */

/**
 * Implements theme_settings().
 */
function data_theme_radix_form_system_theme_settings_alter(&$form, &$form_state) {
  //drupal_set_message('<pre>' . print_r($form, TRUE) . '</pre>');
  // Ensure this include file is loaded when the form is rebuilt from the cache.
  $form_state['build_info']['files']['form'] = drupal_get_path('theme', 'nuboot_radix') . '/theme-settings.php';

  // Copyright.
  $copyright = theme_get_setting('copyright', 'data_theme_radix');
  $form['nuboot_radix_theme_settings']['copyright']['#default_value'] = isset($copyright['value']) ? $copyright['value'] : t('Powered by <a href="http://nucivic.com/dkan">DKAN</a>, a project of <a href="http://nucivic.com">NuCivic</a>');

  // Upload field.
  $form['hero']['hero_file']['#default_value'] = theme_get_setting('hero_file', 'data_theme_radix');

  // Solid color background.
  $form['hero']['background_option']['#default_value'] = theme_get_setting('background_option', 'data_theme_radix');

  // Add svg logo option.
  $form['logo']['settings']['svg_logo']['#default_value'] = theme_get_setting('svg_logo', 'data_theme_radix');

  // Return the additional form widgets.
  return $form;
}
