<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Interfaces\APIRepositoryInterface;

class APIRepository implements APIRepositoryInterface
{

    public function getAPIs($url)
    {
        $client = new \GuzzleHttp\Client();
        $results = $client->get($url, [ 'headers' => [ 'Content-Type' => 'application/json', 'Accept' => 'application/json', ]]);
        $result_body = $results->getBody();

        return json_decode($result_body);

    }
}