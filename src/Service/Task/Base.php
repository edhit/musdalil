<?php

declare(strict_types=1);

namespace App\Service\Task;

use App\Entity\Task;
use App\Repository\TaskRepository;
use App\Service\BaseService;
use Respect\Validation\Validator as v;

abstract class Base extends BaseService
{
    /** @var TaskRepository */
    protected $taskRepository;

    public function __construct(
        TaskRepository $taskRepository
    ) {
        $this->taskRepository = $taskRepository;
    }

    protected function getTaskRepository(): TaskRepository
    {
        return $this->taskRepository;
    }

    protected static function validateTaskName(string $name): string
    {
        if (! v::length(1, 100)->validate($name)) {
            throw new \App\Exception\Task('Invalid name.', 400);
        }

        return $name;
    }

    protected static function validateTaskStatus(int $status): int
    {
        if (! v::numeric()->between(0, 1)->validate($status)) {
            throw new \App\Exception\Task('Invalid status', 400);
        }

        return $status;
    }

    protected function getTaskFromDb(int $taskId, int $userId): Task
    {
        return $this->getTaskRepository()->checkAndGetTask($taskId, $userId);
    }
}
