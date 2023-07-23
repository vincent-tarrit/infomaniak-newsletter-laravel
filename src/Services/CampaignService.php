<?php

namespace Vincenttarrit\Newsletter\Services;

use Vincenttarrit\Newsletter\Models\Campaign;
use Vincenttarrit\Newsletter\Models\Domain;

class CampaignService {
    public function make(?string $domainId = null) : Campaign
    {
        $domain = Domain::from($domainId ?? config('infomaniak-newsletter.default_domain_id'));
        return new Campaign($domain);
    }
}
