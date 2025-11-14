<?php
use Modules\Shop\Core\Http\Controllers\HomeController;
use Ivi\Http\JsonResponse;

/** @var \Ivi\Core\Router\Router $router */
$router->get('/shop', [HomeController::class, 'index']);
$router->get('/shop/ping', fn() => new JsonResponse([
    'ok' => true,
    'module' => 'Shop/Core'
]));