<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\APITrait;

class FootballController extends Controller
{
    use APITrait;

    public function nflHome(){
        return view('pages/nflhome');
    }
    public function nfllineCombos(){
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');
        $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams/anaheim-ducks/formation');
        return view('pages/nflline-combos')->with(['result' => $result , 'teams' => $team_results ]);
    }
}