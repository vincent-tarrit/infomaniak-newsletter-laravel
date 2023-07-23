<?php

namespace Vincenttarrit\Newsletter\Models;

use Vincenttarrit\Newsletter\API\Client;
use Vincenttarrit\Newsletter\Newsletter;

class Campaign extends Model
{
    public string $endpoint = Client::CAMPAIGN;
    public ?int $id;
    public string $subject;
    public string $content;

    public array $groupIds = [];

    public string $email_from_name = '';
    public string $email_from_addr = '';
    public string $lang = 'fr';

    public Domain $domain;

    public function __construct(Domain $domain, ?int $id = null)
    {
        $this->domain = $domain;
        $this->id = $id;
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

    public function emailFromName(string $email_from_name): static
    {
        $this->email_from_name = $email_from_name;
        return $this;
    }

    public function emailFromAddr(string $email_from_addr): static
    {
        $this->email_from_addr = $email_from_addr;
        return $this;
    }

    public function lang(string $lang): static
    {
        $this->lang = $lang;
        return $this;
    }

    public function toArray(): array
    {
        return [
            'subject' => $this->subject,
            'content' => $this->content,
            'email_from_name' => $this->email_from_name,
            'email_from_addr' => $this->email_from_addr,
            'lang' => $this->lang,
            'mailinglistIds' => $this->groupIds,
        ];
    }

    public function send(): static
    {
        $this->save();
        $newsLetter = app(Newsletter::class);
        $response = $newsLetter->client->post(Client::CAMPAIGN . '/' . $this->id . '/send');
        dd($response);
        return $this;
    }

    public function test(?string $email): static
    {
        $this->save();
        $newsLetter = app(Newsletter::class);
        $newsLetter->client->post(Client::CAMPAIGN . '/' . $this->id . '/test', [
            'params' => [
                'email' => $email ?? config('infomaniak-newsletter.test_email'),
            ],
        ]);
        return $this;
    }
}
