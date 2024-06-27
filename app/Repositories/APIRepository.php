<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Interfaces\APIRepositoryInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;


class APIRepository implements APIRepositoryInterface
{

    public function getAPIs($url)
    {
//        try {
            $client = new \GuzzleHttp\Client();
            $results = $client->get($url, [ 'headers' => [ 'Content-Type' => 'application/json', 'Accept' => 'application/json', ]]);
            $result_body = $results->getBody();
            return json_decode($result_body);
//        } catch (ClientException $e) {
//                // Handle the 404 Not Found error
//            if ($e->getResponse()->getStatusCode() === 404) {
//                $errorResponse = json_decode($e->getResponse()->getBody(), true);
//                // Log the error or return a custom error response
//                // For example:
//                return response()->json(['error' => $errorResponse['error']], 404);
//            } else {
//                // Handle other client errors
//                // Log the error or return a generic error response
//                // For example:
//                return response()->json(['error' => 'An error occurred while fetching data from the external API.'], 500);
//            }
//        }
    }
}