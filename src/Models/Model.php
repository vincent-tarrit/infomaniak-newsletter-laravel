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
        dd($this->toArray());
        return $newsLetter->client->post($this->endpoint,[
            'params' => $this->toArray()
        ]);
    }

    public function update() {
        $newsLetter = app(Newsletter::class);
        return $newsLetter->client->put($this->endpoint . '/' . $this->id, $this->toArray());
    }
}
