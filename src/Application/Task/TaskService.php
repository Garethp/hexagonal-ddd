<?php

namespace Example\Application\Task;

use Example\Domain\Task\Repository\TaskRepositoryInterface;
use Example\Domain\Task\Task;

class TaskService
{
    private $repository;

    public function __construct(TaskRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function createTask($id, $name, $description)
    {
        $task = new Task($id, $name, $description);
        $this->repository->saveTask($task);
    }
}