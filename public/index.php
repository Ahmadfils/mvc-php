<?php

use App\Core\Application;

require_once __DIR__ . '/../vendor/autoload.php';

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
