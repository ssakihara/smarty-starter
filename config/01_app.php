<?php

define('APP_ENV', env('APP_ENV', 'local'));
define('APP_KEY', env('APP_KEY'));

define('DB_HOST', env('DB_HOST', 'db'));
define('DB_PORT', env('DB_PORT', 5432));
define('DB_DATABASE', env('DB_DATABASE'));
define('DB_USERNAME', env('DB_USERNAME', 'postgres'));
define('DB_PASSWORD', env('DB_PASSWORD', ''));

define('MEMCACHE_SERVER', env('MEMCACHE_SERVER', 'memcached'));
define('MEMCACHE_SERVER_PORT', env('MEMCACHE_SERVER_PORT', 11211));
