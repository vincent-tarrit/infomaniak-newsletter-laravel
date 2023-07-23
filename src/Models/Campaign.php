<?php

namespace Vincenttarrit\Newsletter\Models;

class Campaign extends Model
{
    static $endpoint = 'campaigns';
    public ?int $id;
    public string $subject;
    public string $content;

    public array $groupIds = [];

    public Domain $domain;

    public function __construct(Domain $domain)
    {
        $this->domain = $domain;
    }

    public function id(?int $id): static
    {
        $this->id = $id;
        return $this;
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
