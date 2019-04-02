<?php

namespace Psonic\Concretes\Commands;

use Psonic\Contracts\Command as CommandInterface;

abstract class Command implements CommandInterface
{
    private $command;
    private $parameters;

    public function __construct($command, $parameters = [])
    {
        $this->command = $command;
        $this->parameters = $parameters;
    }

    public function __toString()
    {
        return $this->command . " " . implode($this->parameters, " ") . "\n";
    }
}
 