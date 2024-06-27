<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\APITrait;
class NBAController extends Controller
{


    use APITrait;

    public function nbalineCombos(){
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');
        foreach($team_results->data as $key){
            if($key->slug){
                // $drp = $key->name;
                $current_team =  $key->name;
                $current_logo = $key->logo->src;
            }
        }
        $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/anaheim-ducks/formation');


        return view('pages/nbaline-combos')->with(['result' => $result , 'teams' => $team_results ]);
    }
    public function nbalineCombosTeam($team_slug){
        $current_team = '';
        $current_logo = '';
        $team_article = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');
        foreach($team_results->data as $key){
            if($key->slug == $team_slug){
                $current_team =  $key->name;
                $current_logo = $key->logo->src;
            }
        }
        $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/'.$team_slug.'/formation');
        return view('pages/nbaline-combos')->with(['teams' => $team_results, 'current_name' =>  $current_team, 'current_logo' =>  $current_logo, 'article' => $team_article]);
    }


    public function nbaHome(Request $request){

//        $firstSegment = $request->segment(1);


        $team_nba = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards?f[league]=nba');

        $team_nhl = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards?f[league]=nba&type=lineup-update,waivers,signing,transaction,call-up,send-down,suspension,rumours,breaking-news,retirement,available,line-change,doubtful,ruled-out,questionable,expected,probable,will-play');

                $player_news = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards?f[league]=nba&f[type]=line-change,waivers,signing,transaction,call-up,send-down,suspension,rumours,breaking-news,retirement,available,doubtful,ruled-out,questionable,expected,probable,will-play,injury,trade');
        $starting_goalies = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards?f[league]=nba&f[type]=starting-goalie');
        $line_combinations = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards?f[league]=nba&f[type]=lineup-update');
        $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');
        return view('pages/nhl-home')->with([ 'teams' => $team_results, 'nhl_results' => $team_nhl, 'nba_results'=> $team_nba, 'starting_goalies'=>$starting_goalies, 'line_combinations'=>$line_combinations, 'player_news'=>$player_news]);
    }
}
