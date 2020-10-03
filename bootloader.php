<?php

define('ROOT', __DIR__);
define('DB_FILE', ROOT . '\app\data\db.json');

session_start();

require 'vendor/autoload.php';
require 'app/config/router.php';
require 'core/functions/html.php';
require 'core/functions/file.php';
require 'core/functions/validators.php';
require 'app/functions/form/validators.php';
require 'app/functions/html/html.php';
require 'app/functions/form/auth.php';

$app = new App\App();


