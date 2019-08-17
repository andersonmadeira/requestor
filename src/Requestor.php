<?php

namespace AndersonMadeira\Requestor;

use GuzzleHttp\Client;

/**
 *  Main Class?
 *
 * @author Anderson Madeira
 */
class Requestor
{
    /**
     * @var Client
     */
    var $httpClient;

    public function constructor()
    {
        $this->httpClient = new Client();
    }

    public function getHttpClient(): Client
    {
        return $this->httpClient;
    }

    public function setHttpClient(Client $client): void
    {
        $this->httpClient = $client;
    }

    /**
     * Greetings
     *
     * @param string $yourName Your name
     *
     * @return string a friendly message
     */
    public function greet($yourName)
    {
        return "Hello {$yourName}";
    }

}