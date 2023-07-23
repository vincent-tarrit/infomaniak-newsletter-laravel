<?php

namespace Vincenttarrit\Newsletter\Models;

class Campaign
{
    public string $subject;
    public string $content;

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
}
