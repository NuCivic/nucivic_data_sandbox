<?php
/**
 * @file
 * Theme and preprocess functions for forms
 */
function data_theme_radix_form_alter(&$form, &$form_state, $form_id) {
  switch ($form_id) {
    case 'colorizer_admin_settings':
      $form['colorizer_global']['colorizer_cssfile']['#default_value'] = 'colorizer/colorizer.css';
      $form['colorizer_global']['colorizer_incfile']['#default_value'] = 'colorizer/colorizer.inc';
      break;

    case 'views_exposed_form':
    	$view = $form_state['view'];
      if ($view->name == 'dkan_datasets' && $view->current_display == 'panel_pane_1') {
        $form['query'] = array(
        	'#type' => 'textfield',
			    // Add field label for 508 compliance.
			    '#title' => 'Search',
			    '#attributes' => array('placeholder' => t('search')),
			    '#size' => 60,
			  );
			  $form['#info']['filter-search_api_views_fulltext']['description'] = '';
      } 
      break;

  }
}
