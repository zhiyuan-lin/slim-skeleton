<?php
require_once __DIR__ . '/vendor/autoload.php';
$settings = require_once __DIR__ . '/src/settings.php';

$app = new \Slim\App($settings);
// Set up dependencies。
require_once __DIR__ . '/src/dependencies.php';
// Register middleware。
require_once __DIR__ . '/src/middleware.php';
// Register routes。
require_once __DIR__ . '/src/routes.php';

$app->run();
