<?php

namespace Vincenttarrit\Newsletter\Services;

use Vincenttarrit\Newsletter\Models\Campaign;

class CampaignService {
    public function make() : Campaign
    {
        return new Campaign();
    }
}
