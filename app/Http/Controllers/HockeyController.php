<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HockeyController extends Controller
{
    //
    public function homePage(){


        // fetch(`https://api.projectedlineups.com/v1/content/pages/about`)
        // $about = `https://api.projectedlineups.com/v1/content/pages/about`;

        // dd($about);


        $api_url = 'https://api.projectedlineups.com/v1/content/pages/about';

        // Read JSON file
        $json_data = file_get_contents($api_url);

        // Decode JSON data into PHP array
        $datas = json_decode($json_data, true);
    //    $datas = $datas->data;

    //$slug = $datas['data']['slug'];
        //   dd($datas['data']['slug']);
        return view('pages/home-page')->with('slug', $datas['data']['slug']);
    }
    public function lineCombos(){

 
        $client = new \GuzzleHttp\Client();
 
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
      //  dd($respose->$result->b5)

        //    print_r(json_decode($body));
   
      //   dd($result->data->slots);
        return view('old-page/line-combos')->with('result', $result);
    }
    public function todaysGame(){
        return view('pages/todays-game');
    }
    public function newsFeed(){
        return view('pages/news-feed');
    }

    public function startingGoaliesv1(){
        return view('pages/starting-goaliesv1');
    }
    public function startingGoalies(){
        return view('old-page/starting-goalies');
    }
    public function playerNews(){
        return view('pages/player-News');
    }
    public function schedule(){
        return view('pages/schedule');
    }
    public function projections(){
        return view('pages/projections');
    }
    public function nflHome(){
        return view('pages/nflhome');
    }
    public function nhlHome(){



       
      
       


        return view('pages/nhlhome');
    }
    public function nhlProps(){
        return view('pages/nhlprops');
    }
    public function nhlstartingGoalies(){
        return view('pages/nhlstarting-goalies');
    }
    public function nhllineCombos(){
        // dd($getTeam);
      
            
       
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
                'https://api.projectedlineups.com/v1/sports/teams',
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
       
       
        //  dd($respose->$result->b5)

        //    print_r(json_decode($body));

        //   dd($result->data->slots);


        return view('pages/nhlline-combos')->with(['result' => $result , 'team' => $team_result, 'article' => $team_article] );
    }

     public function nhllineCombosTeam($team_slug){

        $client = new \GuzzleHttp\Client();
        
        $team = $client->get(
            'https://api.projectedlineups.com/v1/sports/teams',
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
        foreach($team_result->data as $key){
            // print_r($key->slug);
            if($key->slug == $team_slug){
               $drp = $key->name;
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
          
        
    //  dd($respose->$result->b5)

    //    print_r(json_decode($body));

    //   dd($result->data->slots);


    return view('pages/nhlline-combos')->with(['result' => $result , 'team' => $team_result, 'drp_name' => $drp]);
    }
    public function nhlteamNews(){
        return view('pages/nhlteam-news');
    }
    public function nhlindividualplayerNews(){
        return view('pages/nhlindividual-player-news');
    }
    public function nhlallplayerNews(){
        return view('pages/nhlall-player-news');
    }
    public function nhlplayerNews(){
        return view('pages/nhlplayer-news');
    }
    public function nhllineCombinations(){
        return view('pages/nhlline-combinations');
    }
    public function postsarticle(){
        return view('pages/postsarticle');
    }
    
}
