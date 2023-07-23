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

        dd($this->toArray(), $this->endpoint);
        $this->client->post($this->endpoint, $this->toArray());
    }

    public function update() {

    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
