<?php

declare(strict_types=1);

use App\Service\Order\OrderService;
use App\Service\Page\PageService;
use App\Service\Task\TaskService;
use App\Service\User;
use Psr\Container\ContainerInterface;

$container['order_service'] = static function (
    ContainerInterface $container
): OrderService {
    return new OrderService(
        $container->get('order_repository')
    );
};

$container['page_service'] = static function (
    ContainerInterface $container
): PageService {
    return new PageService(
        $container->get('page_repository')
    );
};

$container['task_service'] = static function (
    ContainerInterface $container
): TaskService {
    return new TaskService(
        $container->get('task_repository')
    );
};

$container['find_user_service'] = static function (
    ContainerInterface $container
): User\Find {
    return new User\Find(
        $container->get('user_repository')
    );
};

$container['create_user_service'] = static function (
    ContainerInterface $container
): User\Create {
    return new User\Create(
        $container->get('user_repository')
    );
};

$container['update_user_service'] = static function (
    ContainerInterface $container
): User\Update {
    return new User\Update(
        $container->get('user_repository')
    );
};

$container['delete_user_service'] = static function (
    ContainerInterface $container
): User\Delete {
    return new User\Delete(
        $container->get('user_repository')
    );
};

$container['login_user_service'] = static function (
    ContainerInterface $container
): User\Login {
    return new User\Login(
        $container->get('user_repository')
    );
};
