<?php

namespace Vincenttarrit\Newsletter\Models;

use Vincenttarrit\Newsletter\API\Client;

class Model {

    public function save() {
        if($this->id) {
            $this->update();
        } else {
            $this->create();
        }
    }

    public function create() {

        dd($this->toArray(), self::$endpoint);
        $this->client->post(self::$endpoint, $this->toArray());
    }

    public function update() {

    }
}
