<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
use App\Team;
use App\Player;
use App\Bets;
use App\Position;
use App\User;
class AdminController extends Controller
{
  public function index()
  {
    $match = Match::all();
    $team = Team::all();
    $player = Player::all();
    $bet = Bets::all();
    $position = Position::all();
    $user = User::all();

    return view("admin", ["user" => $user, "match" => $match, "team" => $team, "player" => $player, "bet" => $bet, "position" => $position]);
  }

  public function delbet(Request $request)
  {
    $id = $request->input('bet');
    $val = Bets::findorfail($id);
    $val->delete();

    return redirect('/admin');
  }

  public function delteam(Request $request)
  {
    $id = $request->input('team');
    $val = Teams::findorfail($id);
    $val->delete();

    return redirect('/admin');
  }
  //update form team
  public function AFT(Request $request)
  {
    $id = $request->input('team');
    $val = Team::findorfail($id);
    $team = Team::all();
    return view('/AFT', ['val' => $val, 'team'=> $team]);
  }

  //update field team
  public function AUT(Request $request)
  {
    $id = $request->input('id');
    $team = Team::find($id);
    $team->id = $request->input('id');
    $team->name = $request->input('name');
    $team->logo = $request->input ("logo");
    $team->city = $request->input("city");
    $team->ranking = $request->input("ranking");
    $team->created_at = $request->input("created_at");
    $team->updated_at = $request->input("updated_at");
    $team->save();
    return redirect('/admin');
  }

  public function delplayer(Request $request)
  {
    $id = $request->input('player');
    $val = Player::findorfail($id);
    $val->delete();

    return redirect('/admin');
  }
  //update form field form player
  public function AFP(Request $request)
  {
    $id = $request->input('player');
    $val = Player::findorfail($id);
    $player = Player::all();
    return view('/AFP', ['val' => $val, 'player'=> $player]);
  }

  //update field player
  public function AUP(Request $request)
  {
    $id = $request->input('id');
    $player = Player::find($id);
    $player->id = $request->input('id');
    $player->name = $request->input('name');
    $player->age = $request->input ("age");
    $player->height = $request->input("height");
    $player->ranking = $request->input("ranking");
    $player->id_team = $request->input("id_team");
    $player->created_at = $request->input("created_at");
    $player->updated_at = $request->input("updated_at");
    $player->id_position = $request->input("id_position");
    $player->nationality = $request->input("nationality");
    $player->save();
    return redirect('/admin');
  }

  public function delmatch(Request $request)
  {
    $id = $request->input('match');
    $val = Match::findorfail($id);
    $val->delete();

    return redirect('/admin');
  }

  //update form field form match
  public function AFM(Request $request)
  {
    $id = $request->input('match');
    $val = Match::findorfail($id);
    $match = Match::all();
    return view('/AFM', ['val' => $val, 'match'=> $match]);
  }

  //update field match
  public function AUM(Request $request)
  {
    $id = $request->input('id');
    $match = Match::find($id);
    $match->id = $request->input('id');
    $match->weather = $request->input ("weather");
    $match->city = $request->input("city");
    $match->score_team_1 = $request->input("score_team_1");
    $match->score_team_2 = $request->input("score_team_2");
    $match->created_at = $request->input("created_at");
    $match->updated_at = $request->input("updated_at");
    $match->day_match = $request->input("day_match");
    $match->id_team_1 = $request->input("id_team_1");
    $match->id_team_2 = $request->input ("id_team_2");
    $match->save();
    return redirect('/admin');
  }

  public function delposition(Request $request)
  {
    $id = $request->input('position');
    $val = Position::findorfail($id);
    $val->delete();

    return redirect('/admin');
  }

  //update form field form position
  public function AFPos(Request $request)
  {
    $id = $request->input('position');
    $val = Position::findorfail($id);
    $position = Position::all();
    return view('/AFPos', ['val' => $val, 'position'=> $position]);
  }

  //update field position
  public function AUPos(Request $request)
  {
    $id = $request->input('id');
    $position = Position::find($id);
    $position->id = $request->input('id');
    $position->name = $request->input ("name");
    $position->created_at = $request->input("created_at");
    $position->updated_at = $request->input("updated_at");
    $position->save();
    return redirect('/admin');
  }

  public function deluser(Request $request)
  {
    $id = $request->input('user');
    $val = User::findorfail($id);
    $val->delete();

    return redirect('/admin');
  }

  //update form field form user
  public function AFU(Request $request)
  {
    $id = $request->input('user');
    $val = User::findorfail($id);
    $user = User::all();
    return view('/AFU', ['val' => $val, 'user'=> $user]);
  }

  //update field user
  public function AUU(Request $request)
  {
    $id = $request->input('id');
    $user = User::find($id);
    $user->id = $request->input('id');
    $user->name = $request->input("name");
    $user->email = $request->input("email");
    $user->created_at = $request->input("created_at");
    $user->updated_at = $request->input("updated_at");
    $user->save();
    return redirect('/admin');
  }

    //request pour le login
    public function login(Request $request)
    {
        $id = $request->input('email');
        $pass = $request->input('password');
        $val = User::findorfail($id);
        $control = password_verify($pass, $val['password']);
        if($control == true){
            return redirect('/admin');
        } else {
            return redirect('/login');
        }
    }
}
