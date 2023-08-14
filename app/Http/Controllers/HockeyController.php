<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HockeyController extends Controller
{
    //
    public function index(){
        $client = new \GuzzleHttp\Client();

       

        // print_r(json_decode((string) $body));
        // dd( $projections_result);


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

        return view('pages/index')->with([ 'team' => $team_result, 'article' => $team_article,]);
    }
    public function learn(){
        
        return view('pages/learn') ;
    }
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
    public function nhlHome(){
        
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

        // dd($team_result);

        $home = $client->get(
            'https://api.projectedlineups.com/v1/content/posts',
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
            ]
        );
        $first_cards = $home->getBody();
        $home_cards = json_decode($first_cards);

        // print_r(json_decode((string) $body));



        $articles = $client->get(
            'https://api.projectedlineups.com/v1/content/posts/7',
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
            ]
        );
        $latest_article = $articles->getBody();
        $result_article = json_decode($latest_article);

        // print_r(json_decode((string) $body));

        $goalies = $client->get(
            'https://api.projectedlineups.com/v1/content/cards/cards',
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
            ]
        );
       
       
         $player= $goalies->getBody();
         $player_news = json_decode($player);
          // print_r(json_decode((string) $body));
        //  dd( $player_news);
       
       
        return view('pages/nhlhome')->with(['articles' => $result_article, 'team' => $team_result, 'contentPosts' => $home_cards->data, 'goalies' => $player_news, 'article' => $team_article] );;
    }
    public function nhlProps(){
        return view('pages/nhlprops');
    }
    public function nhlstartingGoalies(){
        $client = new \GuzzleHttp\Client();
        
        $goalies_schedule = $client->get(
            'https://api.projectedlineups.com/v1/schedules/nhl/seasons/2022-2023/games',
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
            ]
        );
        $goalies_sched_body = $goalies_schedule->getBody();
        $team_goalies_sched = json_decode($goalies_sched_body);
        // print_r(json_decode((string) $body));
            // dd($team_goalies_sched);
 
        $starting_goalies = $client->get(
            'https://api.projectedlineups.com/v1/lineups/nhl/starting-goalies',
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
       
            ]
        );
        $starting_goalies_body = $starting_goalies->getBody();
        $team_starting_goalies = json_decode($starting_goalies_body);
        // $team_current_name = array();
        // foreach($team_starting_goalies as $values){
        //     $key=$values['game'];
        //     $team_current_name[$key][]=$values;
        // }
       
        // $team_current_name = array_values($team_current_name);
        // // print_r(json_decode((string) $body));
        // dd($team_current_name);
        // dd($team_starting_goalies);

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

        // dd($team_result);
        return view('pages/nhlstarting-goalies')->with([ 'team' => $team_result, 'article' => $team_article, 'starting_goalies' => $team_starting_goalies, 'goalies_schedule' => $team_goalies_sched]);
    }
    public function nhlstartingGoaliesv1(){
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

        // dd($team_result);
        return view('pages/nhlstarting-goaliesv1')->with([ 'team' => $team_result, 'article' => $team_article ]);
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
       
       
        //  dd($result );

        //    print_r(json_decode($body));

        //   dd($result->data->slots);


        return view('pages/nhlline-combos')->with(['result' => $result , 'team' => $team_result, 'article' => $team_article] );
    }

    public function nhllineCombosTeam($team_slug){
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
                
     //   dd($result);
    return view('pages/nhlline-combos')->with(['result' => $result , 'team' => $team_result, 'current_name' =>  $current_team, 'current_logo' =>  $current_logo, 'article' => $team_article]);
    }
    public function nhlteamNews(){
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
        return view('pages/nhlteam-news')->with(['result' => $result , 'team' => $team_result ]);
    }
    public function nhlindividualplayerNews(){
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

        // dd($team_result);
        return view('pages/nhlindividual-player-news')->with([ 'team' => $team_result, 'article' => $team_article ] );
    }
    public function nhlallplayerNews(){
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

        // dd($team_result);
        return view('pages/nhlall-player-news')->with([ 'team' => $team_result, 'article' => $team_article ] );
    }
    public function nhlplayerNews(){
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

        // dd($team_result);
        return view('pages/nhlplayer-news')->with([ 'team' => $team_result, 'article' => $team_article ] );
    }
    public function nhllineCombinations(){
        $client = new \GuzzleHttp\Client();
        
        $goalies = $client->get(
            'https://api.projectedlineups.com/v1/content/cards/cards',
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
            ]
        );
       
       
         $player= $goalies->getBody();
         $player_news = json_decode($player);

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

        // dd($team_result);

       
         
     
       

        

        return view('pages/nhlline-combinations')->with([ 'team' => $team_result, 'article' => $team_article, 'goalies' => $player_news] );
    }
    public function postsarticle(){
        return view('pages/postsarticle');
    }
    public function nhlprojections(){
        $client = new \GuzzleHttp\Client();

       

        // print_r(json_decode((string) $body));
        // dd( $projections_result);
        $home = $client->get(
            'https://api.projectedlineups.com/v1/content/posts',
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
            ]
        );
        $first_cards = $home->getBody();
        $home_cards = json_decode($first_cards);


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

        // dd($team_result);


        $projections = $client->get(
            'https://api.projectedlineups.com/v1/projections/nhl',
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
            ]
        );
        $name_projections = $projections->getBody();
        $projections_result = json_decode( $name_projections);

        return view('pages/nhlprojections')->with([ 'team' => $team_result, 'article' => $team_article, 'projections' => $projections_result,'contentPosts' => $home_cards->data ]);
    }


    public function nhllineupStudy(){
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
        return view('pages/nhllineup-study')->with(['result' => $result , 'team' => $team_result ]);
    }
}
