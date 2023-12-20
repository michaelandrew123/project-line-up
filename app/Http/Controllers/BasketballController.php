<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\APITrait;

class BasketballController extends Controller
{

    use APITrait;

    public function nbalineCombos(){
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');
        foreach($team_result->data as $key){
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
}