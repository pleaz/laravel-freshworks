<?php

namespace CodeGreenCreative\Freshworks\Api;

use Psr\Http\Message\ResponseInterface;
use CodeGreenCreative\Freshworks\Client;

class Phone extends Client
{
    private $resource = 'phone_calls';

    /**
     * [lookup description]
     * @param  array  $query [description]
     * @return [type]        [description]
     */
    public function log(array $parameters = []): ResponseInterface
    {
        return $this->client->request('GET', '{$this->resource}', ['body' => json_encode($parameters)]);
    }
}