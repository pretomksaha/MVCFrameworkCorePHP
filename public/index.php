<?php

require_once __DIR__ .'/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

use \app\controllers\SiteController;
use \app\controllers\AuthControllers;
use app\core\Application;

$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD']
    ]
];

$app = new Application(dirname(__DIR__), $config);

$app->router->get('/', [SiteController::class, 'home']);

$app->router->get('/contact', [SiteController::class,'contact']);

$app->router->post('/contact', [SiteController::class, 'handleContact']);

$app->router->get('/login',[AuthControllers::class, 'login']);
$app->router->post('/login', [AuthControllers::class,'login']);
$app->router->get('/register',[AuthControllers::class,'register']);
$app->router->post('/register',[AuthControllers::class,'register']);

$app->run();

