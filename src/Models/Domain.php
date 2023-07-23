<?php

namespace Vincenttarrit\Newsletter\Models;

class Domain extends Model
{

    public static function from($id): Domain
    {
        $domain = new Domain();
        $domain->id = $id;
        return $domain;
    }
    public function __construct()
    {
    }
}
