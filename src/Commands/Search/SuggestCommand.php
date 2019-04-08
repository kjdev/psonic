<?php

namespace Psonic\Commands\Search;

use Psonic\Commands\Command;

class SuggestCommand extends Command
{
    private $command    = 'SUGGEST';
    private $parameters = [];

    /**
     * SuggestCommand constructor.
     * @param string $collection
     * @param string $bucket
     * @param string $terms
     * @param null $limit
     */
    public function __construct(string $collection, string $bucket, string $terms, $limit = null)
    {
        $this->parameters = [
            'collection' => $collection,
            'bucket'     => $bucket,
            'terms'      => $this->quote($terms),
            'limit'      => $limit,
        ];

        parent::__construct($this->command, $this->parameters);
    }

    private function quote(string $string)
    {
        return "\"" . $string ."\"";
    }
}