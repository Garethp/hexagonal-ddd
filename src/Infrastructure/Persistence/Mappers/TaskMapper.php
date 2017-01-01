<?php

namespace Example\Infrastructure\Persistence\Mappers;

use Example\Application\Task\Repository\TaskMapperInterface;
use Example\Infrastructure\Persistence\Adapters\AdapterInterface;

class TaskMapper implements TaskMapperInterface
{
    private $adapter;

    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    public function getTask(string $id)
    {
        if (!$this->adapter->has($id)) {
            return null;
        }

        return $this->adapter->get($id);
    }

    public function saveTask(string $id, $task): void
    {
        $this->adapter->set($id, $task);
    }

    public function getAllTasks(): array
    {
        return $this->adapter->getAll();
    }
}