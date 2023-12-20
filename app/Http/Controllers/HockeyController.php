<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Traits\APITrait;


class HockeyController extends Controller
{
    use APITrait;


    public $ext;
    public $team_slug;
    public function index(){
        $team_article = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');
        return view('pages/index')->with([ 'teams' => $team_results, 'article' => $team_article,]);
    }
    public function learn(){

        return view('pages/learn') ;
    }
    // to be fixed
    public function homePage(){

    }
    public function lineCombos(){
        $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/anaheim-ducks/formation');
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
        $team_article = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');
        $home_cards = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/posts');
        $result_article = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/posts/7');
         $player_news = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
//
//        $player_news = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/lineups/nhl/player-news');

//        $team_result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');

//        $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/anaheim-ducks/formation');
//     dd($result);
        $starting_goalies = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/lineups/nhl/starting-goalies');

        return view('pages/nhlhome')->with(['articles' => $result_article, 'teams' => $team_results, 'contentPosts' => $home_cards->data, 'goalies' => $starting_goalies, 'player_news' => $player_news, 'article' => $team_article] );;
    }


//    public function nhlHome(){
//        $team_article = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
//        $team_result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');
//        $home_cards = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/posts');
//        $result_article = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/posts/7');
//        $player_news = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
//
//        return view('pages/nhlhome')->with(['articles' => $result_article, 'team' => $team_result, 'contentPosts' => $home_cards->data, 'goalies' => $player_news, 'article' => $team_article] );;
//    }



    public function nhlProps(){
        return view('pages/nhlprops');
    }
    public function nhlstartingGoalies(){

        $now = Carbon::now()->format('Y-m-d');

//         $currentDateTime = Carbon::now();
//        $carbonDate = Carbon::createFromFormat('Y-m-d', $currentDateTime);


        $team_goalies_sched = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/schedules/nhl/seasons/2022-2023/games');
       $starting_goalies_ = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/lineups/nhl/starting-goalies');
         $team_starting_goalies = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/lineups/nhl/starting-goalies?f[game_date]='. $now);
        $season_starting_goalies = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/schedules/nhl/seasons/2023-2024/games?f[date]='.$now);
        $starting_goalies = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/schedules/nhl/seasons/2023-2024/games?f[date]=' . $now);
//        https://api.projectedlineups.com/v1/schedules/nhl/seasons/2023-2024/games?f[date]=2023-11-16
//        https://api.projectedlineups.com/v1/sports/teams/boston-bruins
//        https://api.projectedlineups.com/v1/schedules/nhl/seasons/2023-2024/games?f[date]=2023-11-16
        // Create an array to store the grouped sub-arrays
//
//        dd($starting_goalies_);
//     dd($season_starting_goalies );

        $groupedArr = array();

        // Iterate through the original array
        foreach ($team_starting_goalies->data as $item) {
            $slug = $item->game->slug;

            // Check if the subject has been encountered before
            if (isset($groupedArr[$slug])) {
                // If yes, add the current item to the existing sub-array
                $groupedArr[$slug][] = $item;
            } else {
                // If no, create a new sub-array for this subject
                $groupedArr[$slug] = array($item);
            }
        }

        // Convert the grouped array into a flat array
        $groupedArr = array_values($groupedArr);
        $team_article = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');

//        $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/anaheim-ducks/formation');

        $currentDateTime = Carbon::now();

        $formattedDateTime = $currentDateTime->format('l, F j, Y');

        return view('pages/nhlstarting-goalies')->with(
            [
                'groupedArr'=>$groupedArr,
                'teams' => $team_results,
                'article' => $team_article,
                'starting_goalies' => $team_starting_goalies,
                'goalies_schedule' => $team_goalies_sched,
                'date'=>$formattedDateTime,
                'seasons'=>$season_starting_goalies
            ]
        );
    }



    public function getNhlstartingGoalies($date){

        $team_goalies_sched = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/schedules/nhl/seasons/2022-2023/games');
//        $team_starting_goalies = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/lineups/nhl/starting-goalies');
        $team_starting_goalies = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/lineups/nhl/starting-goalies?f[game_date]='. $date);
        $starting_goalies = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/schedules/nhl/seasons/2023-2024/games?f[date]=2023-10-30');

        $season_starting_goalies = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/schedules/nhl/seasons/2023-2024/games?f[date]='.$date);
//        dd($season_starting_goalies);
// Create an array to store the grouped sub-arrays
        $groupedArr = array();

// Iterate through the original array
        foreach ($team_starting_goalies->data as $item) {
            $slug = $item->game->slug;

            // Check if the subject has been encountered before
            if (isset($groupedArr[$slug])) {
                // If yes, add the current item to the existing sub-array
                $groupedArr[$slug][] = $item;
            } else {
                // If no, create a new sub-array for this subject
                $groupedArr[$slug] = array($item);
            }
        }

        // Convert the grouped array into a flat array
        $groupedArr = array_values($groupedArr);
        $team_article = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');


        //        $currentDateTime = Carbon::now($date);

        $carbonDate = Carbon::createFromFormat('Y-m-d', $date);
        $formattedDateTime = $carbonDate->format('l, F j, Y');



//        dd($season_starting_goalies);
        return view('pages/nhlstarting-goalies')->with(
            [
                'groupedArr'=>$groupedArr,
                'teams' => $team_results,
                'article' => $team_article,
                'starting_goalies' => $team_starting_goalies,
                'goalies_schedule' => $team_goalies_sched,
                'date'=>$formattedDateTime,
                'seasons'=>$season_starting_goalies
            ]);

    }

    public function nhlstartingGoaliesv1(){
        $team_article = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');
        return view('pages/nhlstarting-goaliesv1')->with([ 'teams' => $team_results, 'article' => $team_article ]);
    }
    public function nhllineCombos(){
        $current_logo = 'https://media.projectedlineups.com/sports/hockey/leagues/nhl/teams/anaheim-ducks/logos/logo.svg';
        $team_article = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
//        $team_result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/anaheim-ducks');
        $team_result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/edmonton-oilers');

        $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/anaheim-ducks/formation');

        $team_color = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/anaheim-ducks');

        $team_color = json_decode(json_encode ( $team_color ), true);


//
////
//          dd($team_result);
        return view('pages/nhlline-combos')->with(['current_logo' =>  $current_logo, 'team_color' => $team_color, 'team_slug'=>$this->team_slug, 'ext' => $this->ext, 'result' => $result , 'team' => $team_result, 'article' => $team_article] );
    }

    public function nhllineCombosTeam($team_slug){
        $current_team = '';
        $current_logo = '';
        $this->team_slug = $team_slug;


        $team_article = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
        $team_result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/'.$team_slug);
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');
//        foreach($team_result->data as $key){
//            // print_r($key->slug);
//            if($key->slug == $team_slug){
                // $drp = $key->name;
                $current_team =  $team_result->data->name;
                $current_logo = $team_result->data->logo->src;

                $this->ext = pathinfo($current_logo, PATHINFO_EXTENSION);


//            }
//        }
        $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/'.$team_slug.'/formation');

        $team_color = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/'.$team_slug);

        $team_color = json_decode(json_encode ( $team_color ), true);


        return view('pages/nhlline-combos')->with(['team_slug'=>$this->team_slug,  'ext' => $this->ext, 'result' => $result, 'team' => $team_result, 'teams' => $team_results, 'current_name' =>  $current_team, 'current_logo' =>  $current_logo, 'article' => $team_article, 'team_color' => $team_color]);
    }
    public function nhlteamNews(){
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');
        $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/anaheim-ducks/formation');
        return view('pages/nhlteam-news')->with(['result' => $result , 'teams' => $team_results ]);
    }
    public function nhlindividualplayerNews(){
        $team_article = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');
        return view('pages/nhlindividual-player-news')->with([ 'teams' => $team_results, 'article' => $team_article ] );
    }
    public function nhlallplayerNews(){
        $team_article = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');
        return view('pages/nhlall-player-news')->with([ 'teams' => $team_results, 'article' => $team_article ] );
    }
    public function nhlplayerNews(){

        $team_article = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');

        // Initialize an empty array to store unique status names
        $uniqueTypeNames = array();

        // Iterate through the data and extract unique status names
        foreach ($team_article->data as $item) {
            if(isset($item->type->name)){
                $typeName = $item->type->name;
                $typeSlug = $item->type->slug;
                if (!in_array($typeName, $uniqueTypeNames)) {
                    $uniqueTypeNames[$typeSlug] = $typeName;
                }
            }
        }

        // Print the unique status names


        return view('pages/nhlplayer-news')->with([ 'teams' => $team_results, 'article' => $team_article, 'type_names'=>$uniqueTypeNames ] );
    }


    public function getNhlplayerNews($type){
        $team_article = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');
// Initialize an empty array to store unique status names
        $uniqueTypeNames = array();

// Iterate through the data and extract unique status names
        foreach ($team_article->data as $item) {
            if(isset($item->type->name)){
                $typeName = $item->type->name;
                $typeSlug = $item->type->slug;
                if (!in_array($typeName, $uniqueTypeNames)) {
                    $uniqueTypeNames[$typeSlug] = $typeName;
                }
            }
        }
// Print the unique status names

        $team_article_filter = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards?f[type]='. $type);
//
        return view('pages/nhlplayer-news')->with([ 'teams' => $team_results, 'article' => $team_article_filter, 'type_names'=>$uniqueTypeNames ] );
    }


    public function nhllineCombinations(){
        $player_news = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
        $team_article = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');

        return view('pages/nhlline-combinations')->with([ 'teams' => $team_results, 'article' => $team_article, 'goalies' => $player_news] );
    }
    public function postsarticle(){
        return view('pages/postsarticle');
    }
    public function nhlprojections(){
        $home_cards = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/posts');
        $team_article = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');
        $projections_result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/projections/nhl');
        return view('pages/nhlprojections')->with([ 'teams' => $team_results, 'article' => $team_article, 'projections' => $projections_result,'contentPosts' => $home_cards->data ]);
    }
    public function nhllineupStudy(){
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');
        $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/anaheim-ducks/formation');
        return view('pages/nhllineup-study')->with(['result' => $result , 'teams' => $team_results ]);
    }
}
