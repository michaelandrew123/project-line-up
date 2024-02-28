<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\APITrait;

class HomeController extends Controller
{
    use APITrait;

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $team_nhl = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards?f[league]=nhl&type=lineup-update,waivers,signing,transaction,call-up,send-down,suspension,rumours,breaking-news,retirement,available,line-change,doubtful,ruled-out,questionable,expected,probable,will-play');
        $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
//        dd($team_nhl);
        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');

        $team_nba = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards?f[league]=nba');
        $team_nfl = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards?f[league]=nfl');

//        dd($team_nfl);
        $team_mlb = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards?f[league]=mlb');

//        dd($team_nhl);
        return view('pages/home')->with([ 'teams' => $team_results, 'nhl_results' => $team_nhl, 'nba_results'=> $team_nba, 'nfl_results'=> $team_nfl]);


    }

}
