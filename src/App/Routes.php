<?php

declare(strict_types=1);

use App\Controller\Order;
use App\Controller\Page;
use App\Controller\Task;
use App\Controller\User;
use App\Middleware\Auth;

/** @var \Slim\App $app */

$app->get('/', 'App\Controller\DefaultController:getHelp');
$app->get('/status', 'App\Controller\DefaultController:getStatus');
$app->post('/login', \App\Controller\User\Login::class);

$app->group('/api/v1', function () use ($app): void {
    $app->group('/order', function () use ($app): void {
        $app->get('', Order\Create::class);
    });

    $app->group('/pages', function () use ($app): void {
        $app->get('/{url}', Page\GetOne::class);
        $app->delete('/{id}', Page\Delete::class)->add(new Auth());
    });

    $app->group('/tasks', function () use ($app): void {
        $app->get('', Task\GetAll::class);
        $app->post('', Task\Create::class);
        $app->get('/{id}', Task\GetOne::class);
        $app->put('/{id}', Task\Update::class);
        $app->delete('/{id}', Task\Delete::class);
    })->add(new Auth());

    $app->group('/users', function () use ($app): void {
        $app->get('', User\GetAll::class)->add(new Auth());
        $app->post('', User\Create::class);
        $app->get('/{id}', User\GetOne::class)->add(new Auth());
        $app->put('/{id}', User\Update::class)->add(new Auth());
        $app->delete('/{id}', User\Delete::class)->add(new Auth());
    });
});
