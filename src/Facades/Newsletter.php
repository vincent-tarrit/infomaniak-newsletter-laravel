<?php

namespace Vincenttarrit\Newsletter\Facades;

use Illuminate\Support\Facades\Facade;
use Vincenttarrit\Newsletter\Services\CampaignService;
use Vincenttarrit\Newsletter\Services\GroupService;

/**
 * @see \Vincenttarrit\Newsletter\Newsletter
 */
class Newsletter extends Facade
{
    public static function campaigns(): CampaignService
    {
        return static::getFacadeRoot()->campaigns();
    }

    public static function groups(): GroupService
    {
        return static::getFacadeRoot()->groups();
    }
    protected static function getFacadeAccessor()
    {
        return \Vincenttarrit\Newsletter\Newsletter::class;
    }
}
