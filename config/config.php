<?php

ini_set('display_errors', 1);

define('DSN', 'mysql:dbhost=localhost;dbuser=practice_login_php');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'practice365');

require_once(__DIR__ . '/../lib/functions.php');
require_once(__DIR__ . '/autoload.php');

session_start();