<?php
namespace Kin29\TicketHunter\Resource\App;

use BEAR\Resource\ResourceObject;
use Kin29\TicketHunter\TicketHunter;

class Index extends ResourceObject
{
    public function onGet(string $keyword) : ResourceObject
    {
        $ticketVendors = new TicketHunter(['TicketPia', 'Eplus', 'LawsonTicket'], $keyword);
        $this->body = [
            'result' => $ticketVendors->getList()
        ];

        return $this;
    }
}
