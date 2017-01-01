<?php

namespace Example\Domain\Task\Repository;

use Example\Domain\Task\Repository\Exception\TaskNotFoundException;
use Example\Domain\Task\Task;

interface TaskRepositoryInterface
{
    /**
     * @param string $id
     * @return Task
     * @throws TaskNotFoundException
     */
    public function getTask(string $id): Task;

    public function saveTask(Task $task): void;

    /**
     * @return Task[]
     */
    public function getAllTasks(): array;
}
