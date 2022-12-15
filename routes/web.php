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
Route::get('/starting-goaliesv1',  [App\Http\Controllers\HockeyController::class, 'startingGoaliesv1']);
Route::get('/starting-goalies', [App\Http\Controllers\HockeyController::class, 'startingGoalies'])->name('starting-goalies');
// Route::get('/hockey',  'HockeyController@index');


//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
