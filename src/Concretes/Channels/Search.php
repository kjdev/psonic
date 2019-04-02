<?php

namespace Psonic\Concretes\Channels;


use Psonic\Concretes\Commands\Search\StartSearchChannelCommand;
use Psonic\Contracts\Client;
use Psonic\Contracts\Command;
use Psonic\Contracts\Response;

class Search extends Channel
{
    public function __construct(Client $client)
    {
        parent::__construct($client);
    }

    public function send(Command $command): Response
    {
        return $this->client->send($command);
    }

    public function connect()
    {
        parent::connect();
        $this->send(new StartSearchChannelCommand);
        $this->client->clearBuffer();
        return $this;
    }
}