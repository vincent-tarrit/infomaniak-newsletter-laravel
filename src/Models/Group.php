<?php

namespace Vincenttarrit\Newsletter\Models;

class Group extends Model
{
    public int $id;

    public string $name;
    public $subscribers = [];

    public function __construct()
    {
    }

    public function name(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function subscribers(array $subscribers): static
    {
        $this->subscribers = $subscribers;
        return $this;
    }
}
