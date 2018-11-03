<?php

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

Route::get('/logout', 'Auth\LoginController@logout');
Auth::routes();




//Sibel
Route::get('/players', 'PlayersController@index')->name('players');
Route::get('players/{id}', 'PlayersController@playerDetails');
Route::get('/playersRanking', 'PlayersController@allPlayers')->name('playersRanking');

Route::get('/locale/{lang}', function($lang){
    session(['my_locale' => $lang]);

    return redirect()->back();
})->name('locale');

//Grecia
Route::get('/teamRanking', 'TeamController@allTeams')->name('teamRanking');
Route::get('/team/{id?}', 'TeamController@index')->name('team');

//Jean
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/match', 'MatchController@index')->name('match');
Route::get('/home', 'MatchController@index');
Route::get('/', 'MatchController@index');
Route::get('/admin', 'AdminController@index');
Route::post('/admin/delbet', 'AdminController@delbet');
Route::post('/admin/updatematchform', 'AdminController@AFM');
Route::post('/admin/UpdateMatch', 'AdminController@AUM');
Route::post('/admin/delmatch', 'AdminController@delmatch');
Route::post('/admin/updateplayerform', 'AdminController@AFP');
Route::post('/admin/UpdatePlayer', 'AdminController@AUP');
Route::post('/admin/delplayer', 'AdminController@delplayer');
Route::post('/admin/updateteamform', 'AdminController@AFT');
Route::post('/admin/UpdateTeam', 'AdminController@AUT');
Route::post('/admin/delteam', 'AdminController@delteam');
Route::post('/admin/updatepositionform', 'AdminController@AFPos');
Route::post('/admin/UpdatePosition', 'AdminController@AUPos');
Route::post('/admin/delposition', 'AdminController@delposition');
Route::post('/admin/updateuserform', 'AdminController@AFU');
Route::post('/admin/UpdateUser', 'AdminController@AUU');
Route::post('/admin/deluser', 'AdminController@deluser');
Route::get('/match', 'MatchController@index');
Route::get('/match/{id?}', 'MatchController@matchDetails');
Route::post('match/bets', 'BetsController@bets');
Route::get('/matchpast/{id?}', 'MatchController@matchDetails');
Route::get('/matchpast/{id?}', 'MatchController@matchDetailsPast');
Route::get('/', 'MatchController@index');
Route::get('/home', 'MatchController@index');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', 'AdminController@index');
    Route::post('/admin/delbet', 'AdminController@delbet');
    Route::post('/admin/updatematchform', 'AdminController@AFM');
    Route::post('/admin/UpdateMatch', 'AdminController@AUM');
    Route::post('/admin/delmatch', 'AdminController@delmatch');
    Route::post('/admin/updateplayerform', 'AdminController@AFP');
    Route::post('/admin/UpdatePlayer', 'AdminController@AUP');
    Route::post('/admin/delplayer', 'AdminController@delplayer');
    Route::post('/admin/updateteamform', 'AdminController@AFT');
    Route::post('/admin/UpdateTeam', 'AdminController@AUT');
    Route::post('/admin/delteam', 'AdminController@delteam');
    Route::post('/admin/updatepositionform', 'AdminController@AFPos');
    Route::post('/admin/UpdatePosition', 'AdminController@AUPos');
    Route::post('/admin/delposition', 'AdminController@delposition');
    Route::post('/admin/updateuserform', 'AdminController@AFU');
    Route::post('/admin/UpdateUser', 'AdminController@AUU');
    Route::post('/admin/deluser', 'AdminController@deluser');
});

Route::get('/match', 'MatchController@index');
Route::get('/match/{id?}', 'MatchController@matchDetails');
Route::get('/matchpast/{id?}', 'MatchController@matchDetailsPast');
Route::post('match/bets', 'BetsController@bets');

Route::get('/team', 'TeamController@allTeams');
Route::get('/team/{id?}', 'TeamController@index')->name('team');

Route::get('/players', 'PlayersController@index');
Route::get('players/{id}', 'PlayersController@playerDetails');

Route::get('/teamRanking', 'TeamController@allTeams')->name('teamRanking');










