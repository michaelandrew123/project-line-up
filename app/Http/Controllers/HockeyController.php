<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Traits\APITrait;
use Illuminate\Support\Collection;
use Illuminate\Http\Client\RequestException;

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

    public function nhllineCombinationsDemo(){

        $team_formation = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/arsenal/formation');

        // - _ - //
//          dd($team_formation);
        return view('pages/nhlline-combinations-demo')->with([
            'formation' => $team_formation
        ]);

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
    public function home(Request $request){

        //old nhl home

        $firstSegment = $request->segment(1);


        $team_nba = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards?f[league]='. $firstSegment);
        $team_nhl = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards?f[league]='. $firstSegment .'&type=lineup-update,waivers,signing,transaction,call-up,send-down,suspension,rumours,breaking-news,retirement,available,line-change,doubtful,ruled-out,questionable,expected,probable,will-play');
        $player_news = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards?f[league]='. $firstSegment .'&f[type]=line-change,waivers,signing,transaction,call-up,send-down,suspension,rumours,breaking-news,retirement,available,doubtful,ruled-out,questionable,expected,probable,will-play,injury,trade&l=100');



        $starting_goalies = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards?f[league]='. $firstSegment .'&f[type]=starting-goalie');
        $line_combinations = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards?f[league]='. $firstSegment .'&f[type]=lineup-update');


//        https://api.projectedlineups.com/v1/content/cards/cards?f[league]=nhl&f[type]=line-change,lineup-update

        $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');
//        var_dump($team_results->data);
//         dd($player_news);


        $quarterback = [];
        $running_back = [];
        $wide_receiver = [];
        $tight_end = [];
        $lineman = [];
        $defence = [];
        foreach($player_news->data as  $key=>$val){
            if($val->player->position->slug == 'quarterback'){
                $quarterback[] = $val;
            }
            if($val->player->position->slug == 'running-back'){
                $running_back[] = $val;
            }
            if($val->player->position->slug == 'wide-receiver'){
                $wide_receiver[] = $val;
            }
            if($val->player->position->slug == 'tight-end'){
                $tight_end[] = $val;
            }
            if($val->player->position->slug == 'lineman'){
                $lineman[] = $val;
            }
            if($val->player->position->slug == 'defence'){
                $defence[] = $val;
            }

        }

//       dd($quarterback);



        $team_movement = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/lineups/'. $firstSegment .'/movements');

        return view('pages/nhl-home')->with([
            'teams' => $team_results,
            'nhl_results' => $team_nhl,
            'nba_results'=> $team_nba,
            'starting_goalies'=>$starting_goalies,
            'line_combinations'=>$line_combinations,
            'player_news'=>$player_news,
            'quarterback'=>$quarterback,
            'running_back' => $running_back,
            'wide_receiver' => $wide_receiver,
            'tight_end' => $tight_end,
            'lineman' => $lineman,
            'defence' => $defence,
            'team_movement'=>$team_movement
        ]);
    }
    public function nhlMatchup(){

        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');


        $currentDateTime = Carbon::now();

        $formattedDateTime = $currentDateTime->format('l, F j, Y');
        $now = $currentDateTime->format('Y-m-d');

        $team_logo = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/schedules/nhl/seasons/2023-2024/games?f[date]='.$now);

        $data = $team_logo->data;

        $firstID = null;
        $responseHome=[];
        $responseAway=[];
        $shuffleArray=[];
        foreach ($data as $key=>$val){
//            if($key == 0){
//                $firstID = $val->id;
//            }
            $matchup = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/schedules/nhl/seasons/2023-2024/games/'.$val->id.'?f[date]='.$now);

            $home_id =  $matchup->data->starting_goalies->home->team->id;
            $away_id =  $matchup->data->starting_goalies->away->team->id;


            $responseHome[$key] = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards?f[league]=nhl&f[team]='.$home_id);
            $responseAway[$key] = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards?f[league]=nhl&f[team]='.$away_id);
            $shuffleArray[$key] = array_merge($responseHome[$key]->data, $responseAway[$key]->data);
            $length = count($shuffleArray[$key]);
            for ($i = $length - 1; $i > 0; $i--) {
                $j = mt_rand(0, $i);
                $temp = $shuffleArray[$key][$i];
                $shuffleArray[$key][$i] = $shuffleArray[$key][$j];
                $shuffleArray[$key][$j] = $temp;
            }
        }



//        dd($shuffleArray[$key]);



//        $matchup = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/schedules/nhl/seasons/2023-2024/games/'.$firstID.'?f[date]='.$now);
//        $single_data = $matchup->data;

//        dd($single_data);
//        $home_id = $single_data->starting_goalies->home->team->id;
//        $away_id = $single_data->starting_goalies->away->team->id;




//        $responseAway = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards?f[league]=nhl&f[team]='.$away_id);
//
//        $dataHome = $responseHome->data;
//        $dataAway = $responseAway->data;
//
//        $shuffleArray = array_merge($dataHome, $dataAway);
//        $length = count($shuffleArray);
//        for ($i = $length - 1; $i > 0; $i--) {
//            $j = mt_rand(0, $i);
//            $temp = $shuffleArray[$i];
//            $shuffleArray[$i] = $shuffleArray[$j];
//            $shuffleArray[$j] = $temp;
//        }



//        $responseHome1 = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards?f[league]=nhl');
//
//
////
//        foreach($responseHome1->data as $key=>$val){
//
////            if($va->team->id == 1)
//
//        }
//
//
//        dd($responseHome1->data);
//        $responseAway = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards?f[league]=nhl&f[team]='.$away_id);



        return view('pages/nhl-matchup')->with(['teams' => $team_results, 'current_date' =>$formattedDateTime, 'team_logo'=>$data, 'shuffle_two_team_player_card' => $shuffleArray]);

    }

    public function lineChange(Request $request){
        $firstSegment = $request->segment(1);
        $team_movement = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/lineups/'. $firstSegment .'/movements');

        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');

        $availableTeam = array();
        $availableTeamData = array();
        foreach($team_movement->data as $value){
            if (!in_array($value->team->name, $availableTeam)) {
                // Add the value to the unique array
                $availableTeam[$value->team->slug] = $value->team->name;
            }
            $availableTeamData[] = $value;
//            if($availableTeam[$value->team->slug] == $value->team->name){
//
//            }
        }

//        dd($team_movement);
        return view('pages/line-change')->with([
            'teams' => $team_results,
            'team_movement'=>$team_movement,
            'available_team'=>$availableTeam,
            'availableTeamData' => $availableTeamData

        ]);
    }




    public function getLineChange(Request $request, $slug){
//        $firstSegment = $request->segment(1);
//        $team_movement = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/lineups/'. $firstSegment .'/movements');
//
//
//        $availableTeam = array();
//        $availableTeamData = array();
//        foreach($team_movement->data as $value){
//            if (!in_array($value->team->name, $availableTeam)) {
//                // Add the value to the unique array
//                $availableTeam[$value->team->slug] = $value->team->name;
//            }
//
//            if($availableTeam[0] == $value->team->name){
//                $availableTeamData[] = $value;
//            }
//        }
//
//        dd($availableTeam);
//
//
//
//        return view('pages/line-change')->with([
//            'team_movement'=>$team_movement,
//            'available_team'=>$availableTeam,
//            'availableTeamData' => $availableTeamData
//
//        ]);
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
    public function nhlstartingGoalies(Request $request){
        $firstSegment = $request->segment(1);
        $now = Carbon::now()->format('Y-m-d');

//         $currentDateTime = Carbon::now();
//        $carbonDate = Carbon::createFromFormat('Y-m-d', $currentDateTime);

//commented line
        $team_goalies_sched = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/schedules/'.$firstSegment.'/seasons/2022-2023/games');
       $starting_goalies_ = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/lineups/'.$firstSegment.'/starting-goalies');
         $team_starting_goalies = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/lineups/'.$firstSegment.'/starting-goalies?f[game_date]='. $now);




        $season_starting_goalies = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/schedules/'.$firstSegment.'/seasons/2023-2024/games?f[date]='.$now);
//        dd($season_starting_goalies);


//end commented line




        $starting_goalies = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/schedules/'.$firstSegment.'/seasons/2023-2024/games?f[date]=' . $now);
//        https://api.projectedlineups.com/v1/schedules/nhl/seasons/2023-2024/games?f[date]=2023-11-16
//        https://api.projectedlineups.com/v1/sports/teams/boston-bruins
//        https://api.projectedlineups.com/v1/schedules/nhl/seasons/2023-2024/games?f[date]=2023-11-16
        // Create an array to store the grouped sub-arrays

//        dd($starting_goalies_);
//     dd($season_starting_goalies );

        $groupedArr = array();

//commented line
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


//end commented line
        $team_article = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');

//        $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/anaheim-ducks/formation');

        $currentDateTime = Carbon::now();

        $formattedDateTime = $currentDateTime->format('l, F j, Y');


        return view('pages/nhlstarting-goalies')->with(
            [
//                'groupedArr'=>$groupedArr,
                'teams' => $team_results,
                'article' => $team_article,
//                'starting_goalies' => $team_starting_goalies,
//                'goalies_schedule' => $team_goalies_sched,
                'date'=>$formattedDateTime,
                'seasons'=>$season_starting_goalies ? $season_starting_goalies : null,
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
    public function nhllineCombos(Request $request){

        $firstSegment = $request->segment(1);
        $current_logo = 'https://media.projectedlineups.com/sports/hockey/leagues/nhl/teams/anaheim-ducks/logos/logo.svg';
        $team_article = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
//        $team_result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/anaheim-ducks');
        $team_result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/anaheim-ducks');
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0&f[league]='. $firstSegment);
//        https://api.projectedlineups.com/v1/sports/teams?l=0

        $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/anaheim-ducks/formation');

        $team_color = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/anaheim-ducks');

        $team_color = json_decode(json_encode ( $team_color ), true);

//
////
///
        return view('pages/nhlline-combos')->with([
            'current_logo' =>  $current_logo,
            'team_color' => $team_color,
            'team_slug'=>$this->team_slug,
            'ext' => $this->ext,
            'result' => $result ,
            'team' => $team_result,
            'teams' => $team_results,
            'article' => $team_article] );
    }

    public function nhllineCombosTeam($team_slug, Request $request){
        $current_team = '';
        $current_logo = '';
        $firstSegment = $request->segment(1);
        $this->team_slug = $team_slug;
        $team_article = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
        $team_result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/'.$team_slug);
//        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?f[league]='. $firstSegment);

        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0&f[league]='. $firstSegment);

//        dd($team_results);
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
        $team_combination = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/lineups/nhl/combinations');

        $team_color = json_decode(json_encode ( $team_color ), true);
//        https://api.projectedlineups.com/v1/lineups/nhl/combinations
//
////        dd($team_article);
//        dd($team_combination);
//
//
//        dd($team_results);
//         dd($result);
        return view('pages/nhlline-combos')->with([
            'team_slug'=>$this->team_slug,
            'ext' => $this->ext,
            'result' => $result,
            'team' => $team_result,
            'teams' => $team_results,
            'current_name' =>  $current_team,
            'current_logo' =>  $current_logo,
            'article' => $team_article,
            'team_color' => $team_color
        ]);
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
    public function nhlplayerNews(Request $request){
        $firstSegment = $request->segment(1);
        $team_article = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards?f[league]='. $firstSegment);
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');
//        dd($team_article);
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
//         dd($team_results);

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

    public function nhllineCombinations(Request $request){

        $firstSegment = $request->segment(1);

        $player_news = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
        $team_article = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0&f[league]='. $firstSegment);


//        dd($team_results);
        $team_result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/anaheim-ducks');
        $team_players = [];
//        dd($team_results->data);
        foreach ($team_results->data as $key=>$val){
            try {
//                $team_players[$key] = $val->slug;

                if(isset($val->slug)){
                    $team_players[$key] = $val->slug;
                    if($firstSegment == 'nba'){
                        if($val->league->slug == 'nba') {
                            $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/boston-celtics/formation');
                        }
                    }elseif($firstSegment == 'nhl'){
                        if($val->league->slug == 'nhl') {
                            $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/' . $val->slug . '/formation');
                        }
                    }elseif($firstSegment == 'mlb'){
                        if($val->league->slug == 'mlb'){
                            $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/'.$val->slug.'/formation');
                            $team_player_card[$result->data->team->slug] = $result->data->slots->pg;
                        }
                    }elseif($firstSegment == 'epl'){
                        if($val->league->slug == 'epl') {
                            $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/' . $val->slug . '/formation');
                        }
                          $team_player_card[$result->data->team->slug] = $result->data->slots->goalkeeper;
                    }
//                    $team_players[$key] = $result->data;



                }
//                if (!empty($result->data)) {
//                    $team_players[$key] = $result->data;
//                }

            } catch (RequestException $e) {
                if ($e->response->status() == 404) {
                    // Handle the 404 error gracefully
                    // For example, you can return a response with a custom message
                    return response()->json(['error' => 'Formation not found for this team'], 404);
                } else {
                    // Handle other types of errors
                    return response()->json(['error' => 'An error occurred while accessing the API'], 500);
                }
            }

        }


        $team_player_card = [];
        $team_player_cards = [];
        foreach ($team_results->data as $key=>$val){
            $slots=[];
            try {
//                1568

//                dd($result);

                if($firstSegment == 'nhl'){

                    if (!empty($result->data)) {
                        $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/'.$val->slug.'/formation');
                        $team_player_card[$result->data->team->slug] = $result->data->slots->lw1;
                    }
                }elseif($firstSegment == 'nba'){
                    if($val->league->slug == 'nba') {
                        $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/boston-celtics/formation');
                        $team_player_card[$result->data->team->slug] = $result->data->slots->pg;
                    }
                }elseif($firstSegment == 'mlb'){
                    if($val->league->slug == 'mlb'){
                        $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/'.$val->slug.'/formation');
                        $team_player_card[$result->data->team->slug] = $result->data->slots->pg;
                    }
//                        dd($result);
                }elseif($firstSegment == 'epl'){
                    if($val->league->slug == 'epl') {
                        $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/' . $val->slug . '/formation');
                        $team_player_card[$result->data->team->slug] = $result->data->slots->goalkeeper;
                    }
                }else{
//                    if($val->league->slug == 'epl') {
                        $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/' . $val->slug . '/formation');
                        $team_player_card[$result->data->team->slug] = $result->data->slots->pg;
//                    }
                }


            } catch (ClientException $e) {


                $statusCode = $e->getResponse()->getStatusCode();
                if ($statusCode === 404) {
                    $errorResponse = json_decode($e->getResponse()->getBody(), true);
                    if (isset($errorResponse['error']) && strpos($errorResponse['error'], 'new-york-knicks') !== false) {
                        // Handle the case where "new-york-knicks" is not found
                        // For example:
                        return response()->json(['error' => 'The team "new-york-knicks" was not found.'], 404);
                    } else {
                        // Handle other 404 errors
                        // For example:
                        return response()->json(['error' => 'The requested resource was not found.'], 404);
                    }
                } else {
                    // Handle other client errors
                    // Log the error or return a generic error response
                    // For example:
                    return response()->json(['error' => 'An error occurred while fetching data from the external API.'], 500);
                }


            }
//
//                echo "Error occurred for team ".$val->slug.": " . $e->getMessage() . "\n";
//                continue;
        }

//



//        $line_combinations = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards?f[league]=nhl&f[type]=lineup-update');
//
//        dd($team_player_card);
        return view('pages/nhlline-combinations')
            ->with([
                'teams' => $team_results,
                'team' => $team_result,
                'article' => $team_article,
                'goalies' => $player_news,
                'team_players'=> $team_players,
                'team_player_card'=>$team_player_card
            ]);
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
