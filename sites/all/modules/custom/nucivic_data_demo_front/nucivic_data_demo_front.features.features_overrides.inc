<?php
/**
 * @file
 * nucivic_data_demo_front.features.features_overrides.inc
 */

/**
 * Implements hook_features_override_default_overrides().
 */
function nucivic_data_demo_front_features_override_default_overrides() {
  // This code is only used for UI in features. Exported alters hooks do the magic.
  $overrides = array();

  // Exported overrides for: page_manager_pages
  $overrides["page_manager_pages.front_page.access|settings"]["DELETED"] = TRUE;
  $overrides["page_manager_pages.front_page.access|type"]["DELETED"] = TRUE;
  $overrides["page_manager_pages.front_page.default_handlers|page_front_page_panel_context|conf|display|content|new-11969a4b-795a-40df-8d66-91f6daec6c20"]["DELETED"] = TRUE;
  $overrides["page_manager_pages.front_page.default_handlers|page_front_page_panel_context|conf|display|content|new-11a61c9a-9de2-4923-a1ac-978ea420e618"] = (object) array(
      'pid' => 'new-11a61c9a-9de2-4923-a1ac-978ea420e618',
      'panel' => 'middle',
      'type' => 'views_panes',
      'subtype' => 'dkan_data_stories-panel_pane_1',
      'shown' => TRUE,
      'access' => array(),
      'configuration' => array(
        'more_link' => 1,
        'items_per_page' => 4,
      ),
      'cache' => array(),
      'style' => array(
        'settings' => NULL,
      ),
      'css' => array(),
      'extras' => array(),
      'position' => 1,
      'locks' => array(),
      'uuid' => '11a61c9a-9de2-4923-a1ac-978ea420e618',
    );
  $overrides["page_manager_pages.front_page.default_handlers|page_front_page_panel_context|conf|display|content|new-5fa2c0d1-01e6-4930-85d6-7e945ef55006"] = (object) array(
      'pid' => 'new-5fa2c0d1-01e6-4930-85d6-7e945ef55006',
      'panel' => 'top-first',
      'type' => 'custom',
      'subtype' => 'custom',
      'shown' => TRUE,
      'access' => array(),
      'configuration' => array(
        'admin_title' => '',
        'title' => '',
        'body' => '<img src="https://cldup.com/7SE2wO16aq.gif" width=100% style="margin-top:-20px; margin-bottom:30px;"></img>',
        'format' => 'html',
        'substitute' => TRUE,
      ),
      'cache' => array(),
      'style' => array(
        'settings' => NULL,
      ),
      'css' => array(),
      'extras' => array(),
      'position' => 0,
      'locks' => array(),
      'uuid' => '5fa2c0d1-01e6-4930-85d6-7e945ef55006',
    );
  $overrides["page_manager_pages.front_page.default_handlers|page_front_page_panel_context|conf|display|content|new-8fbbf013-59db-4f45-a53d-b134fe7c6720"] = (object) array(
      'pid' => 'new-8fbbf013-59db-4f45-a53d-b134fe7c6720',
      'panel' => 'top-second',
      'type' => 'block',
      'subtype' => 'dkan_sitewide_demo_front-dkan_search_front',
      'shown' => TRUE,
      'access' => array(),
      'configuration' => array(
        'override_title' => 1,
        'override_title_text' => 'Search Data',
        'override_title_heading' => 'h2',
      ),
      'cache' => array(),
      'style' => array(
        'settings' => NULL,
      ),
      'css' => array(),
      'extras' => array(),
      'position' => 1,
      'locks' => array(),
      'uuid' => '8fbbf013-59db-4f45-a53d-b134fe7c6720',
    );
  $overrides["page_manager_pages.front_page.default_handlers|page_front_page_panel_context|conf|display|content|new-949696cf-520f-40a4-af80-725bca8b2f13|position"] = 2;
  $overrides["page_manager_pages.front_page.default_handlers|page_front_page_panel_context|conf|display|content|new-c3d7f8b0-6433-46c9-a8e9-914563284e59"] = (object) array(
      'pid' => 'new-c3d7f8b0-6433-46c9-a8e9-914563284e59',
      'panel' => 'top-second',
      'type' => 'custom',
      'subtype' => 'hero_unit_frontpage',
      'shown' => TRUE,
      'access' => array(),
      'configuration' => array(
        'admin_title' => '',
        'title' => '',
        'body' => '',
        'format' => 'html',
        'substitute' => TRUE,
      ),
      'cache' => array(),
      'style' => array(
        'settings' => NULL,
      ),
      'css' => array(),
      'extras' => array(),
      'position' => 0,
      'locks' => array(),
      'uuid' => 'c3d7f8b0-6433-46c9-a8e9-914563284e59',
    );
  $overrides["page_manager_pages.front_page.default_handlers|page_front_page_panel_context|conf|display|content|new-d3655ff2-8c3c-4a0b-b492-8aa98ea1b7f3"]["DELETED"] = TRUE;
  $overrides["page_manager_pages.front_page.default_handlers|page_front_page_panel_context|conf|display|content|new-e9a59ddf-15b0-4a29-8ef6-ef460ba539e0"]["DELETED"] = TRUE;
  $overrides["page_manager_pages.front_page.default_handlers|page_front_page_panel_context|conf|display|panels|middle|1"] = 'new-11a61c9a-9de2-4923-a1ac-978ea420e618';
  $overrides["page_manager_pages.front_page.default_handlers|page_front_page_panel_context|conf|display|panels|top-first|0"] = 'new-5fa2c0d1-01e6-4930-85d6-7e945ef55006';
  $overrides["page_manager_pages.front_page.default_handlers|page_front_page_panel_context|conf|display|panels|top-second|0"] = 'new-c3d7f8b0-6433-46c9-a8e9-914563284e59';
  $overrides["page_manager_pages.front_page.default_handlers|page_front_page_panel_context|conf|display|panels|top-second|1"] = 'new-8fbbf013-59db-4f45-a53d-b134fe7c6720';
  $overrides["page_manager_pages.front_page.default_handlers|page_front_page_panel_context|conf|display|panels|top-second|2"] = 'new-949696cf-520f-40a4-af80-725bca8b2f13';
  $overrides["page_manager_pages.front_page.default_handlers|page_front_page_panel_context|conf|display|title_pane"] = 0;

 return $overrides;
}
