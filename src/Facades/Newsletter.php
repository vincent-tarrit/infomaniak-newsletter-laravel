<?php

namespace Vincenttarrit\Newsletter\Facades;

use Illuminate\Support\Facades\Facade;
use Vincenttarrit\Newsletter\Services\CampaignService;

/**
 * @see \Vincenttarrit\Newsletter\Newsletter
 */
class Newsletter extends Facade
{
    public static function campaigns(): CampaignService
    {
        return static::getFacadeRoot()->campaigns();
    }
    protected static function getFacadeAccessor()
    {
        return \Vincenttarrit\Newsletter\Newsletter::class;
    }
}
