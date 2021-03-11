<?php

declare(strict_types=1);

use App\Repository\OrderRepository;
use App\Repository\PageRepository;
use App\Repository\TaskRepository;
use App\Repository\UserRepository;
use Psr\Container\ContainerInterface;

$container['order_repository'] = static function (
    ContainerInterface $container
): OrderRepository {
    return new OrderRepository($container->get('db'));
};

$container['page_repository'] = static function (
    ContainerInterface $container
): PageRepository {
    return new PageRepository($container->get('db'));
};

$container['task_repository'] = static function (
    ContainerInterface $container
): TaskRepository {
    return new TaskRepository($container->get('db'));
};

$container['user_repository'] = static function (
    ContainerInterface $container
): UserRepository {
    return new UserRepository($container->get('db'));
};
