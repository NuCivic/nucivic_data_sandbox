<?php

if (!defined('PANTHEON_ENVIRONMENT')) {
  // Database.
  $databases['default']['default'] = array(
    'database' => 'nucivicdatademo',
    'username' => 'root',
    'password' => 'root',
    'host' => 'localhost',
    'driver' => 'mysql',
    'port' => 3306,
    'prefix' => '',
  );
}
