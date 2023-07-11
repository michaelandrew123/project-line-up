<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoccerController extends Controller
{


public function soclineCombos(){
        $client = new \GuzzleHttp\Client();

 


    
        $team = $client->get(
            'https://api.projectedlineups.com/v1/sports/teams?l=0',
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
            ]
        );

        $team_body = $team->getBody();
        $team_result = json_decode($team_body);

        
        // print_r(json_decode((string) $body));

        // dd($team_result);

       
        $response = $client->get(
            'https://api.projectedlineups.com/v1/sports/teams/anaheim-ducks/formation',
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
            ]
        );
        $body = $response->getBody();

        $result = json_decode($body);


       

        return view('pages/socline-combos')->with(['result' => $result , 'team' => $team_result ]);

        
    }
}