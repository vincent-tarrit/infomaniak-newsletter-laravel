<?php

namespace Vincenttarrit\Newsletter\Models;

use Vincenttarrit\Newsletter\API\Client;
use Vincenttarrit\Newsletter\Newsletter;

class Model {

    public function save() : Campaign {
        if($this->id) {
           return $this->update();
        } else {
            return $this->create();
        }
    }

    public function create() {
        $newsLetter = app(Newsletter::class);
        $response = $newsLetter->client->post($this->endpoint,[
            'params' => $this->toArray()
        ]);

        if($response->errors()) {
            throw new \Exception($response->reason());
        }
        $this->id = $response->datas()['id'];
        return $this;
    }

    public function update() {
        $newsLetter = app(Newsletter::class);
        return $newsLetter->client->put($this->endpoint . '/' . $this->id, $this->toArray());
    }
}
