<?php

namespace Vincenttarrit\Newsletter;


use Vincenttarrit\Newsletter\API\Client;
use Vincenttarrit\Newsletter\Services\CampaignService;

class Newsletter
{
    readonly public Client $client;

    public function __construct()
    {
        $this->client = new Client(config('newsletter.client'), config('newsletter.secret'));
    }

    public function campaigns(): CampaignService
    {
        return app(CampaignService::class);
    }
}
