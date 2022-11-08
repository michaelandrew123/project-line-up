<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HockeyController extends Controller
{
    //

    public function lineCombos(){
        return view('line-combos');
    }
    public function todaysGame(){
        return view('todays-game');
    }
    public function newsFeed(){
        return view('news-feed');
    }
    public function startingGoaliesv1(){
        return view('starting-goaliesv1');
    }
    public function startingGoalies(){
        return view('starting-goalies');
    }
}
