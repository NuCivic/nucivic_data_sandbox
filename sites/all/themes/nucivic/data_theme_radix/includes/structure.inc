<?php
/**
 * @file
 * Theme and preprocess functions for breadcrumbs, messages, tabs..etc
 */

/**
 * Implements template_preprocess_page().
 */
function data_theme_radix_preprocess_page(&$variables) {
	$theme = variable_get('theme_default');
	if (theme_get_setting('default_logo')) {
		$variables['logo'] = '/' . drupal_get_path('theme', $theme ) . '/logo.png';		
	}
}