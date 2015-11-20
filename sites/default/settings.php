<?php

if (!defined('PANTHEON_ENVIRONMENT')) {
  // Database.
  $databases['default']['default'] = array(
    'database' => 'nucivic_data_demo',
    'username' => 'root',
    'password' => '',
    'host' => '127.0.0.1',
    'driver' => 'mysql',
    'port' => 3306,
    'prefix' => '',
  );
}
