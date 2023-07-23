<?php

namespace Vincenttarrit\Newsletter;


use Illuminate\Support\Facades\App;
use Infomaniak\ClientApiNewsletter\Client;
use Vincenttarrit\Newsletter\Services\CampaignService;

class Newsletter
{
    private $client;

    public function __construct()
    {
        $this->client = new Client(config('newsletter.client'), config('newsletter.secret'));
    }

    public function campaigns(): CampaignService
    {
        return app(CampaignService::class);
    }
}
