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



Route::get('/home',  [App\Http\Controllers\HomeController::class, 'index']);


Route::get('/',  [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/learn',  [App\Http\Controllers\HockeyController::class, 'learn']);
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
//    Route::get('/home',  [App\Http\Controllers\HockeyController::class, 'nhlhome'])->name('nhl.home');
    Route::get('/home',  [App\Http\Controllers\HockeyController::class, 'home'])->name('nhl.home');
    Route::get('/props',  [App\Http\Controllers\HockeyController::class, 'nhlprops'])->name('nhl.props');
    Route::get('/all-player-news',  [App\Http\Controllers\HockeyController::class, 'nhlallplayerNews'])->name('nhl.all-player-news');
    Route::get('/player-news',  [App\Http\Controllers\HockeyController::class, 'nhlplayerNews'])->name('nhl.player-news');
    Route::get('/player-news/{slug}',  [App\Http\Controllers\HockeyController::class, 'getNhlplayerNews'])->name('nhl.player-news.slug');
    Route::get('/starting-goaliesv1',  [App\Http\Controllers\HockeyController::class, 'nhlstartingGoaliesv1'])->name('nhl.starting-goaliesv1');
    Route::get('/starting-goalies',  [App\Http\Controllers\HockeyController::class, 'nhlstartingGoalies'])->name('nhl.starting-goalies');
    Route::get('/starting-goalies/{date}',  [App\Http\Controllers\HockeyController::class, 'getNhlstartingGoalies'])->name('nhl.get-starting-goalies');
    Route::get('/individual-player-news',  [App\Http\Controllers\HockeyController::class, 'nhlindividualplayerNews'])->name('nhl.individual-player-news');
    Route::get('/team-news',  [App\Http\Controllers\HockeyController::class, 'nhlteamNews'])->name('nhl.team-news');
//    Route::get('/line-combos',  [App\Http\Controllers\HockeyController::class, 'nhllineCombos'])->name('nhl.line-combos');
//    Route::get('/line-combos/{team}',  [App\Http\Controllers\HockeyController::class, 'nhllineCombosTeam'])->name('nhl.line-combos.team');
    Route::get('/line-combinations/{team}',  [App\Http\Controllers\HockeyController::class, 'nhllineCombosTeam'])->name('nhl.line-combinations.team');
    Route::get('/line-combinations',  [App\Http\Controllers\HockeyController::class, 'nhllineCombinations'])->name('nhl.line-combinations');
    Route::get('/projections',  [App\Http\Controllers\HockeyController::class, 'nhlprojections'])->name('nhl.projections');
    Route::get('/lineup-study',  [App\Http\Controllers\HockeyController::class, 'nhllineupStudy'])->name('nhl.lineup-study');
    Route::get('/matchup',  [App\Http\Controllers\HockeyController::class, 'nhlMatchup'])->name('nhl.matchup');
    Route::get('/line-change',  [App\Http\Controllers\HockeyController::class, 'lineChange'])->name('nhl.matchup');
   
});

Route::prefix('nfl')->group(function () {
    Route::get('/home',  [App\Http\Controllers\FootballController::class, 'nflhome'])->name('nfl.home');
    Route::get('/line-combos',  [App\Http\Controllers\FootballController::class, 'nfllineCombos'])->name('nfl.line-combos');

});
Route::prefix('nba')->group(function () {
    Route::get('/home',  [App\Http\Controllers\HockeyController::class, 'home'])->name('nba.home');
    Route::get('/player-news',  [App\Http\Controllers\HockeyController::class, 'nhlplayerNews'])->name('nba.player-news');
    Route::get('/starting-goalies',  [App\Http\Controllers\HockeyController::class, 'nhlstartingGoalies'])->name('nba.starting-goalies');
    Route::get('/starting-goalies/{date}',  [App\Http\Controllers\HockeyController::class, 'getNhlstartingGoalies'])->name('nba.get-starting-goalies');
    Route::get('/starting-lineups',  [App\Http\Controllers\HockeyController::class, 'nhllineCombinations'])->name('nba.starting-lineups');
    Route::get('/starting-lineups/{team}',  [App\Http\Controllers\HockeyController::class, 'nhllineCombosTeam'])->name('nba.starting-lineups.team');
//    Route::get('/player-news/{slug}',  [App\Http\Controllers\HockeyController::class, 'getNhlplayerNews'])->name('nba.player-news.slug');
//    Route::get('/line-combinations',  [App\Http\Controllers\NBAController::class, 'nbalineCombos'])->name('nba.line-combinations');

//    Route::get('/line-combinations',  [App\Http\Controllers\NBAController::class, 'nhllineCombosTeam'])->name('nba.line-combinations');
//    Route::get('/line-combinations/{team}',  [App\Http\Controllers\HockeyController::class, 'nhllineCombosTeam'])->name('nhl.line-combinations.team');
//    Route::get('/line-combos/{team}',  [App\Http\Controllers\NBAController::class, 'nhllineCombosTeam'])->name('nba.line-combos.team');
});
Route::prefix('soc')->group(function () { // mlb
    Route::get('/home',  [App\Http\Controllers\HockeyController::class, 'home'])->name('soc.home');
    Route::get('/line-combos',  [App\Http\Controllers\SoccerController::class, 'soclineCombos'])->name('soc.line-combos');
    Route::get('/line-combos/{team}',  [App\Http\Controllers\SoccerController::class, 'getSoccer'])->name('soc.line-combos.team');
});


Route::prefix('mlb')->group(function () {
    Route::get('/home',  [App\Http\Controllers\HockeyController::class, 'home'])->name('mlb.home');
    Route::get('/player-news',  [App\Http\Controllers\HockeyController::class, 'nhlplayerNews'])->name('mlb.player-news');
    Route::get('/starting-goalies',  [App\Http\Controllers\HockeyController::class, 'nhlstartingGoalies'])->name('mlb.starting-goalies');
    Route::get('/starting-goalies/{date}',  [App\Http\Controllers\HockeyController::class, 'getNhlstartingGoalies'])->name('mlb.get-starting-goalies');
    Route::get('/starting-lineups',  [App\Http\Controllers\HockeyController::class, 'nhllineCombinations'])->name('mbl.line-combinations');
    Route::get('/starting-lineups/{team}',  [App\Http\Controllers\HockeyController::class, 'nhllineCombinations'])->name('mbl.line-combinations.team');
    Route::get('/starting-lineups-demo',  [App\Http\Controllers\HockeyController::class, 'nhllineCombinationsDemo'])->name('mbl.line-combinations-demo');
    //    Route::get('/line-combos',  [App\Http\Controllers\SoccerController::class, 'soclineCombos'])->name('soc.line-combos');
//    Route::get('/line-combos/{team}',  [App\Http\Controllers\SoccerController::class, 'getSoccer'])->name('soc.line-combos.team');
});

Route::prefix('nfl')->group(function () {
    Route::get('/home',  [App\Http\Controllers\HockeyController::class, 'home'])->name('nfl.home');
    Route::get('/starting-goalies',  [App\Http\Controllers\HockeyController::class, 'nhlstartingGoalies'])->name('nfl.starting-goalies');
    Route::get('/starting-goalies/{date}',  [App\Http\Controllers\HockeyController::class, 'getNhlstartingGoalies'])->name('nfl.get-starting-goalies');
    Route::get('/player-news',  [App\Http\Controllers\HockeyController::class, 'nhlplayerNews'])->name('nfl.player-news');
    Route::get('/depth-charts',  [App\Http\Controllers\HockeyController::class, 'nhllineCombinations'])->name('nfl.line-combinations');
    Route::get('/depth-charts/{team}',  [App\Http\Controllers\HockeyController::class, 'nhllineCombosTeam'])->name('nfl.starting-lineups.team');
    //    Route::get('/line-combos',  [App\Http\Controllers\SoccerController::class, 'soclineCombos'])->name('soc.line-combos');
//    Route::get('/line-combos/{team}',  [App\Http\Controllers\SoccerController::class, 'getSoccer'])->name('soc.line-combos.team');
});

Route::prefix('epl')->group(function () {
    Route::get('/home',  [App\Http\Controllers\HockeyController::class, 'home'])->name('epl.home');
    Route::get('/starting-goalies',  [App\Http\Controllers\HockeyController::class, 'nhlstartingGoalies'])->name('epl.starting-goalies');
    Route::get('/starting-goalies/{date}',  [App\Http\Controllers\HockeyController::class, 'getNhlstartingGoalies'])->name('epl.get-starting-goalies');
    Route::get('/player-news',  [App\Http\Controllers\HockeyController::class, 'nhlplayerNews'])->name('epl.player-news');
    Route::get('/predicted-lineups',  [App\Http\Controllers\HockeyController::class, 'nhllineCombinations'])->name('epl.predicted-lineups');
    Route::get('/predicted-lineups/{team}',  [App\Http\Controllers\HockeyController::class, 'nhllineCombosTeam'])->name('epl.predicted-lineups.team');
    Route::get('/starting-lineups-demo',  [App\Http\Controllers\HockeyController::class, 'nhllineCombinationsDemo'])->name('epl.starting-lineups-demo');
    //    Route::get('/line-combos',  [App\Http\Controllers\SoccerController::class, 'soclineCombos'])->name('soc.line-combos');
//    Route::get('/line-combos/{team}',  [App\Http\Controllers\SoccerController::class, 'getSoccer'])->name('soc.line-combos.team');
});
// Route::get('/hockey',  'HockeyController@index');


//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
