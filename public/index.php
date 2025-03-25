<?php

use App\Core\Application;

$autoloadPath = __DIR__ . '/../vendor/autoload.php';

if (!file_exists($autoloadPath)) {
    die('Please run "composer install" in the project root directory');
}

require_once $autoloadPath;

$config = [
    'db' => [
        'dsn' => 'mysql:host=localhost;dbname=ahdlc_db',
        'user' => 'root',
        'password' => ''
    ]
];

$app = new Application(dirname(__DIR__), $config);

require_once __DIR__ . '/../routes/web.php';

$app->run();
