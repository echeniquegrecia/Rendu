<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayersController extends Controller
{
//     *
//      * Create a new controller instance.
//      *
//      * @return void
     
//     public function __construct()
//     {
//         $this->middleware('auth');
//     }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function allPlayers()
    {
        $allPlayers=\App\Player::all()->sortBy(function ($p) {
            return $p->ranking;
        })->reverse();
        return view('playersRanking', ['allPlayers'=>$allPlayers]);
    }

    public function playerDetails($id)
    {	
    	$player = \App\Player::find($id);
        return view('players', ['player'=>$player]); 
    }

}
