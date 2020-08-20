<?php

define('APP_ENV', $_ENV['APP_ENV'] !== '' ? $_ENV['APP_ENV'] : 'local');
define('APP_KEY', $_ENV['APP_KEY']);

define('DB_HOST', $_ENV['DB_HOST'] !== '' ? $_ENV['DB_HOST'] : 'postgres');
define('DB_PORT', $_ENV['DB_PORT'] !== '' ? $_ENV['DB_PORT'] : 5432);
define('DB_DATABASE', $_ENV['DB_DATABASE'] !== '' ? $_ENV['DB_DATABASE'] : '');
define('DB_USERNAME', $_ENV['DB_USERNAME'] !== '' ? $_ENV['DB_USERNAME'] : 'postgres');
define('DB_PASSWORD', $_ENV['DB_HOST'] !== '' ? $_ENV['DB_PASSWORD'] : '');

define('MEMCACHE_SERVER', $_ENV['MEMCACHE_SERVER'] !== '' ? $_ENV['MEMCACHE_SERVER'] : 'memcached');
define('MEMCACHE_SERVER_PORT', $_ENV['MEMCACHE_SERVER_PORT'] !== '' ? $_ENV['MEMCACHE_SERVER_PORT'] : 11211);
