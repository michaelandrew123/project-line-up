<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasketballController extends Controller
{
    
    public function nbalineCombos(){

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
        
          foreach($team_result->data as $key){
            // print_r($key->slug);
            if($key->slug){
                // $drp = $key->name;
                $current_team =  $key->name;
                $current_logo = $key->logo->src;
                 
            }
    
            
        }
        
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




        return view('pages/nbaline-combos')->with(['result' => $result , 'team' => $team_result ]);
    }
    public function nbalineCombosTeam($team_slug){
        
        $current_team = '';
        $current_logo = '';

        $client = new \GuzzleHttp\Client();

        $article = $client->get(
            'https://api.projectedlineups.com/v1/content/cards/cards',
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
            ]
        );
       
        // print_r(json_decode((string) $body));
        $sports_article = $article->getBody();
        $team_article = json_decode( $sports_article);
        // dd($team_article); 


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
        // dd($team_result->data[0]->slug);
        foreach($team_result->data as $key){
            // print_r($key->slug);
            if($key->slug == $team_slug){
                // $drp = $key->name;
                $current_team =  $key->name;
                $current_logo = $key->logo->src;
                 
            }
        }
        
        $url='https://api.projectedlineups.com/v1/sports/teams/'.$team_slug.'/formation';
        $response = $client->get(
            $url,
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
            ]
        );
        $body = $response->getBody();
        $result = json_decode($body);
       
    return view('pages/nbaline-combos')->with(['team' => $team_result, 'current_name' =>  $current_team, 'current_logo' =>  $current_logo, 'article' => $team_article]);
    }
}