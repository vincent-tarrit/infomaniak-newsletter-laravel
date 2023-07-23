<?php

namespace Vincenttarrit\Newsletter\Models;

use Vincenttarrit\Newsletter\API\Client;
use Vincenttarrit\Newsletter\Newsletter;

class Model {

    public function save() {
        if($this->id) {
           return $this->update();
        } else {
            return $this->create();
        }
    }

    public function create() {
        $newsLetter = app(Newsletter::class);
        return $newsLetter->client->post($this->endpoint, $this->toArray());
    }

    public function update() {
        $newsLetter = app(Newsletter::class);
        return $newsLetter->client->put($this->endpoint . '/' . $this->id, $this->toArray());
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
