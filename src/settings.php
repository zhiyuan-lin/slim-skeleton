<?php
return [
    'settings' => [
        'displayErrorDetails'       => true, // set to false in production
        'addContentLengthHeader'    => false, // Allow the web server to send the content-length header
        'routerCacheFile'           => __DIR__ . '/routes.cache.php',
        // Monolog settings
        'logger' => [
            'name'  => 'slim-app',
            'path'  => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
        // Twig Views settings
        'view' => [
            'path'  => __DIR__ . '/Views',
            'cache' => __DIR__ . '/Views/cache',
        ],
        'db' => [
            'driver'    => 'mysql',
            'host'      => getenv('MYSQL_HOST'),
            'database'  => getenv('MYSQL_DATABASE'),
            'username'  => getenv('MYSQL_USER'),
            'password'  => getenv('MYSQL_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ],
    ],
];
