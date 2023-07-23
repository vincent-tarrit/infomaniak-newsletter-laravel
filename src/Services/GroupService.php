<?php

namespace Vincenttarrit\Newsletter\Services;

use Vincenttarrit\Newsletter\Models\Campaign;
use Vincenttarrit\Newsletter\Models\Group;

class GroupService {
    public function make() : Group
    {
        return new Group();
    }
}
