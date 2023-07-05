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
Route::get('/',  [App\Http\Controllers\HockeyController::class, 'index']);
Route::get('/learn',  [App\Http\Controllers\HockeyController::class, 'learn']);
Route::get('/home',  [App\Http\Controllers\HockeyController::class, 'homepage']);
Route::get('/line-combos',  [App\Http\Controllers\HockeyController::class, 'lineCombos']);
Route::get('/todays-game',  [App\Http\Controllers\HockeyController::class, 'todaysGame']);
Route::get('/news-feed',  [App\Http\Controllers\HockeyController::class, 'newsFeed']);
Route::get('/player-news',  [App\Http\Controllers\HockeyController::class, 'playerNews'])->name('player-news');
Route::get('/schedule',  [App\Http\Controllers\HockeyController::class, 'schedule']);
Route::get('/projections',  [App\Http\Controllers\HockeyController::class, 'projections'])->name('projections');
Route::get('/starting-goaliesv1',  [App\Http\Controllers\HockeyController::class, 'startingGoaliesv1'])->name('starting-goaliesv1');
Route::get('/starting-goalies', [App\Http\Controllers\HockeyController::class, 'startingGoalies'])->name('starting-goalies');
Route::get('/posts/article',  [App\Http\Controllers\HockeyController::class, 'postsarticle'])->name('posts.article');

Route::prefix('nhl')->group(function () {
    Route::get('/home',  [App\Http\Controllers\HockeyController::class, 'nhlhome'])->name('nhl.home');
    Route::get('/props',  [App\Http\Controllers\HockeyController::class, 'nhlprops'])->name('nhl.props');
    Route::get('/all-player-news',  [App\Http\Controllers\HockeyController::class, 'nhlallplayerNews'])->name('nhl.all-player-news');
    Route::get('/player-news',  [App\Http\Controllers\HockeyController::class, 'nhlplayerNews'])->name('nhl.player-news');
    Route::get('/starting-goaliesv1',  [App\Http\Controllers\HockeyController::class, 'nhlstartingGoaliesv1'])->name('nhl.starting-goaliesv1');
    Route::get('/starting-goaliesv2',  [App\Http\Controllers\HockeyController::class, 'nhlstartingGoaliesv2'])->name('nhl.starting-goaliesv2');
    Route::get('/individual-player-news',  [App\Http\Controllers\HockeyController::class, 'nhlindividualplayerNews'])->name('nhl.individual-player-news');
    Route::get('/team-news',  [App\Http\Controllers\HockeyController::class, 'nhlteamNews'])->name('nhl.team-news');
    Route::get('/line-combos',  [App\Http\Controllers\HockeyController::class, 'nhllineCombos'])->name('nhl.line-combos');
    Route::get('/line-combos/{team}',  [App\Http\Controllers\HockeyController::class, 'nhllineCombosTeam'])->name('nhl.line-combos.team');
    Route::get('/line-combinations',  [App\Http\Controllers\HockeyController::class, 'nhllineCombinations'])->name('nhl.line-combinations');
    Route::get('/projections',  [App\Http\Controllers\HockeyController::class, 'nhlprojections'])->name('nhl.projections');
    Route::get('/lineup-study',  [App\Http\Controllers\HockeyController::class, 'nhllineupStudy'])->name('nhl.lineup-study');
   
});

Route::prefix('nfl')->group(function () {
    Route::get('/home',  [App\Http\Controllers\HockeyController::class, 'nflhome'])->name('nfl.home');
    Route::get('/line-combos',  [App\Http\Controllers\HockeyController::class, 'nfllineCombos'])->name('nfl.line-combos');

});
Route::prefix('nba')->group(function () {
    Route::get('/line-combos',  [App\Http\Controllers\HockeyController::class, 'nbalineCombos'])->name('nba.line-combos');
});
Route::prefix('soc')->group(function () {
    Route::get('/line-combos',  [App\Http\Controllers\HockeyController::class, 'soclineCombos'])->name('soc.line-combos');
});
// Route::get('/hockey',  'HockeyController@index');


//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
