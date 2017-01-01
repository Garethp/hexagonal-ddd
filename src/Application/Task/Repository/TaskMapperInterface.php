<?php

namespace Example\Application\Task\Repository;

interface TaskMapperInterface
{
    public function getTask(string $id);

    public function saveTask(string $id, $task): void;

    public function getAllTasks(): array;
}