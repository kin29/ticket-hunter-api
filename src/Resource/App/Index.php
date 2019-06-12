<?php
namespace Kin29\TicketHunter\Resource\App;

use BEAR\Resource\ResourceObject;

class Index extends ResourceObject
{
    public function onGet(string $keyword) : ResourceObject
    {
        $this->body = [
            'keyword' => $keyword
        ];

        return $this;
    }
}
