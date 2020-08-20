<?php

define('APP_ENV', $_ENV['APP_ENV']);

define('DB_HOST', $_ENV['DB_HOST'] ?? 'postgres');
define('DB_PORT', $_ENV['DB_PORT'] ?? 5432);
define('DB_DATABASE', $_ENV['DB_DATABASE']);
define('DB_USERNAME', $_ENV['DB_USERNAME'] ?? 'postgres');
define('DB_PASSWORD', $_ENV['DB_PASSWORD'] ?? '');
