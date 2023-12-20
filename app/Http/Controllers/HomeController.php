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
//        $data = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');
//
//        return view('pages/home-page')->with('slug', $data);

        $team_nhl = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards?f[league]=nhl');
        $result = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/content/cards/cards');

        $team_results = $this->apiRepository->getAPIs('https://api.projectedlineups.com/v1/sports/teams?l=0');
//       dd($team_nhl);
        return view('pages/projectedlineup-home')->with([ 'teams' => $team_results, 'nhl_results' => $team_nhl,]);


    }

}
