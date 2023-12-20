<?php

namespace App\Http\Controllers;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\APITrait;

class SoccerController extends Controller
{
    use APITrait;

    public function soclineCombos(){
        $team_result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');
        $formations_result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/lineups/epl/formations');
        $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/anaheim-ducks/formation');
        return view('pages/socline-combos')->with(['result' => $result ,'team' => $team_result, 'formation' => $formations_result ]);
    }

    public function getSoccer($slug){
        if(empty($slug)){
            $slug='epl';
        }
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');
        $formations_result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/lineups/'.$slug.'/formations');
        $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/anaheim-ducks/formation');
        $soccer1 = [];
        foreach($team_results->data as $key=>$val){
            if($val->sport->slug == 'soccer'){
                $soccer1[]=$val;
            }
        }
        return view('pages/socline-combos')->with([ 'result' => $result ,'teams' => $team_results, 'formation' => $formations_result ]);
    }
}
