<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HockeyController extends Controller
{
    //
    public function homePage(){
        return view('pages/home-page');
    }
    public function lineCombos(){
        return view('old-page/line-combos');
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
        return view('pages/nhlline-combos');
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
}
