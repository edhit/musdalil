<?php

declare(strict_types=1);

use App\Service\Note;
use App\Service\PageService;
use App\Service\Task\TaskService;
use App\Service\User;
use Psr\Container\ContainerInterface;

$container['find_note_service'] = static function (
    ContainerInterface $container
): Note\Find {
    return new Note\Find(
        $container->get('note_repository')
    );
};

$container['create_note_service'] = static function (
    ContainerInterface $container
): Note\Create {
    return new Note\Create(
        $container->get('note_repository')
    );
};

$container['update_note_service'] = static function (
    ContainerInterface $container
): Note\Update {
    return new Note\Update(
        $container->get('note_repository')
    );
};

$container['delete_note_service'] = static function (
    ContainerInterface $container
): Note\Delete {
    return new Note\Delete(
        $container->get('note_repository')
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
