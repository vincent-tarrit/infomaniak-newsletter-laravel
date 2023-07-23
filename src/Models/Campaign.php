<?php

namespace Vincenttarrit\Newsletter\Models;

class Campaign extends Model
{
    public string $subject;
    public string $content;

    public array $groupIds = [];

    public function __construct()
    {
    }

    public function subject(string $subject): static
    {
        $this->subject = $subject;
        return $this;
    }

    public function content(string $content): static
    {
        $this->content = $content;
        return $this;
    }

    public function groups(array $groupIds): static
    {
        $this->groupIds = $groupIds;
        return $this;
    }
}
