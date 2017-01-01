<?php

namespace Example\Infrastructure\Persistence\Adapters;

class ArrayAdapter implements AdapterInterface
{
    private $array = [];

    public function __construct(array $array = [])
    {
        $this->array = $array;
    }

    public function get(string $id)
    {
        return $this->array[$id];
    }

    public function getAll(): array
    {
        return array_values($this->array);
    }

    public function set(string $id, $value)
    {
        $this->array[$id] = $value;
    }

    public function has(string $id): bool
    {
        return isset($this->array[$id]);
    }

    public function delete(string $id)
    {
        unset($this->array[$id]);
    }
}