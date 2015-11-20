<?php
/**
 * @file
 * Theme settings.
 */

/**
 * Implements theme_settings().
 */
function data_theme_radix_form_system_theme_settings_alter(&$form, &$form_state) {
  // Ensure this include file is loaded when the form is rebuilt from the cache.
  $form_state['build_info']['files']['form'] = drupal_get_path('theme', 'data_theme_radix') . '/theme-settings.php';
  unset($form['nuboot_radix_theme_settings']);

  // Add theme settings here.
  $form['nuboot_radix_theme_settings'] = array(
    '#title' => t('Theme Settings'),
    '#type' => 'fieldset',
  );
  // Copyright.
  $copyright = theme_get_setting('copyright');
  $form['nuboot_radix_theme_settings']['copyright'] = array(
    '#title' => t('Copyright'),
    '#type' => 'text_format',
    '#format' => 'html',
    '#default_value' => isset($copyright['value']) ? $copyright['value'] : t('Powered by <a href="http://nucivic.com/dkan">DKAN</a>, a project of <a href="http://nucivic.com">NuCivic</a>'),
  );
  // Hero fieldset.
  $form['hero'] = array(
    '#type' => 'fieldset',
    '#title' => t('Hero Unit'),
    '#group' => 'general',
  );
  // Upload field.
  $form['hero']['hero_file'] = array(
    '#type' => 'managed_file',
    '#title' => t('Upload a new photo for the hero section background'),
    '#description' => t('<p>The hero unit is the large featured area located on the front page.
      This theme supplies a default background image for this area. You may upload a different
      photo here and it will replace the default background image.</p><p>Max. file size: 2 MB
      <br>Recommended pixel size: 1920 x 400<br>Allowed extensions: .png .jpg .jpeg</p>'),
    '#required' => FALSE,
    '#upload_location' => file_default_scheme() . '://theme/backgrounds/',
    '#default_value' => theme_get_setting('hero_file'),
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg'),
    ),
  );
  // Solid color background.
  $form['hero']['background_option'] = array(
    '#type' => 'textfield',
    '#title' => t('Solid color option'),
    '#description' => t('<p>Enter a hex value here to use a solid background color rather than an image in the hero unit. Make sure the image field above is empty.'),
    '#required' => FALSE,
    '#default_value' => theme_get_setting('background_option'),
    '#element_validate' => array('data_nuboot_radix_background_option_setting'),
  );
  // Add svg logo option.
  $form['logo']['settings']['svg_logo'] = array(
    '#type' => 'managed_file',
    '#title' => t('Upload an .svg version of your logo'),
    '#description' => t('<p>Be sure to also add a .png version of your logo with the <em>Upload logo image</em> field above for older browsers that do not support .svg files. Both files should have the same name, only the suffix should change (i.e. logo.png & logo.svg).</p>'),
    '#required' => FALSE,
    '#upload_location' => file_default_scheme() . '://',
    '#default_value' => theme_get_setting('svg_logo'),
    '#upload_validators' => array(
      'file_validate_extensions' => array('svg'),
    ),
  );
  // Attach custom submit handler to the form.
  $form['#submit'][] = 'data_theme_radix_settings_submit';

  // Return the additional form widgets.
  return $form;
}

/**
 * Implements hook_setings_submit().
 */
function data_theme_radix_settings_submit($form, &$form_state) {
  $settings = array();
  // If the user entered a path relative to the system files directory for
  // for the hero unit, store a public:// URI so the theme system can handle it.
  if (!empty($values['hero_path'])) {
    $values['hero_path'] = _system_theme_settings_validate_path($values['hero_path']);
  }
  // Get the previous value.
  $previous = $form['hero']['hero_path']['#default_value'];
  if ($previous !== 'profiles/dkan/themes/contrib/hhs_demo/assets/images/hero.jpg') {
    $previous = 'public://' . $previous;
  }
  else {
    $previous = FALSE;
  }
  if ($file = file_save_upload('hero_upload')) {
    $parts = pathinfo($file->filename);
    $destination = 'public://' . $parts['basename'];
    $file->status = FILE_STATUS_PERMANENT;
    if (file_copy($file, $destination, FILE_EXISTS_REPLACE)) {
      $_POST['hero_path'] = $form_state['values']['hero_path'] = $destination;
      // If new file has a different name than the old one, delete the old.
      if ($previous && $destination != $previous) {
        drupal_unlink($previous);
      }
    }
  }
  else {
    // Avoid error when the form is submitted without specifying a new image.
    $_POST['hero_path'] = $form_state['values']['hero_path'] = $previous;
  }
}

/**
 * Helper function to validate background color field
 */
function data_nuboot_radix_background_option_setting($element, &$form, &$form_state) {
  if(!empty($element['#value'])) {
    $hex = $element['#value'];
    // Must be a string.
    $valid = is_string($hex);
    // Hash prefix is optional.
    $hex = ltrim($hex, '#');
    // Must be either RGB or RRGGBB.
    $length = strlen($hex);
    $valid = $valid && ($length === 3 || $length === 6);
    // Must be a valid hex value.
    $valid = $valid && ctype_xdigit($hex);
    if ($valid) {
      return;
    }
    else {
      form_error($element, t('Must be a valid hexadecimal CSS color value.'));
    }
  }
}