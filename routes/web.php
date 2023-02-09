<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',  [App\Http\Controllers\HockeyController::class, 'homepage']);
Route::get('/line-combos',  [App\Http\Controllers\HockeyController::class, 'lineCombos']);
Route::get('/todays-game',  [App\Http\Controllers\HockeyController::class, 'todaysGame']);
Route::get('/news-feed',  [App\Http\Controllers\HockeyController::class, 'newsFeed']);
Route::get('/player-news',  [App\Http\Controllers\HockeyController::class, 'playerNews']);
Route::get('/schedule',  [App\Http\Controllers\HockeyController::class, 'schedule']);
Route::get('/projections',  [App\Http\Controllers\HockeyController::class, 'projections']);
Route::get('/nfl/home',  [App\Http\Controllers\HockeyController::class, 'nflhome'])->name('nfl.home');
Route::get('/nhl/home',  [App\Http\Controllers\HockeyController::class, 'nhlhome'])->name('nhl.home');
Route::get('/nhl/all-player-news',  [App\Http\Controllers\HockeyController::class, 'nhlallplayerNews'])->name('nhl.all-player-news');
Route::get('/nhl/starting-goalies',  [App\Http\Controllers\HockeyController::class, 'nhlstartingGoalies'])->name('nhl.starting-goalies');
Route::get('/nhl/individual-player-news',  [App\Http\Controllers\HockeyController::class, 'nhlindividualplayerNews'])->name('nhl.individual-player-news');
Route::get('/nhl/team-news',  [App\Http\Controllers\HockeyController::class, 'nhlteamNews'])->name('nhl.team-news');
Route::get('/nhl/line-combos',  [App\Http\Controllers\HockeyController::class, 'nhllineCombos'])->name('nhl.line-combos');
Route::get('/starting-goaliesv1',  [App\Http\Controllers\HockeyController::class, 'startingGoaliesv1'])->name('starting-goaliesv1');
Route::get('/starting-goalies', [App\Http\Controllers\HockeyController::class, 'startingGoalies'])->name('starting-goalies');
// Route::get('/hockey',  'HockeyController@index');


//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
