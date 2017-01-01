<?php

namespace Example\Application\Task\Repository;

use Example\Domain\Task\Repository\Exception\TaskNotFoundException;
use Example\Domain\Task\Repository\TaskRepositoryInterface;
use Example\Domain\Task\Task;

class TaskRepository implements TaskRepositoryInterface
{
    private $mapper;

    public function __construct(TaskMapperInterface $mapper)
    {
        $this->mapper = $mapper;
    }

    /**
     * @param string $id
     * @return Task
     * @throws TaskNotFoundException
     */
    public function getTask(string $id): Task
    {
        $task = $this->mapper->getTask($id);
        if ($this === null) {
            throw new TaskNotFoundException();
        }

        return $task;
    }

    public function saveTask(Task $task): void
    {
        $this->mapper->saveTask($task->getId(), $task);
    }

    /**
     * @return Task[]
     */
    public function getAllTasks(): array
    {
        return $this->mapper->getAllTasks();
    }

}