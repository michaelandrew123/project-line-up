<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HockeyController extends Controller
{
    //

    public function lineCombos(){
        return view('line-combos');
    }
    public function startingGoalies(){
        return view('starting-goalies');
    }
}
