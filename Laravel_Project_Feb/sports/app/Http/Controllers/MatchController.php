<?php

namespace App\Http\Controllers;

use App\Match;
use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MatchController extends Controller
{
    public function index()
    {
        $i = 0;
        $j = 0;
        $matchpast = Match::where('day_match', '<=', '2018-04-18')->get();

        foreach ($matchpast as $matchs) {

            $team1 = Match::join('team', 'matchs.id_team_1', '=', 'team.id')
                ->select('team.name')
                ->where('team.id', '=', $matchs['id_team_1'])
                ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
                ->get();
            foreach ($team1 as $teams) {
                $t1 = $teams->name;
            }

            $team2 = Match::join('team', 'matchs.id_team_2', '=', 'team.id')
                ->select('team.name')
                ->where('team.id', '=', $matchs['id_team_2'])
                ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
                ->get();
            foreach ($team2 as $teams) {
                $t2 = $teams->name;
            }
            $tab1[$i] = array('t1' => $t1, 't2' => $t2);
            $i++;
        }

        $k = 0;
        $l = 0;
        $match = Match::where('day_match', '>', '2018-04-18')->get();

        foreach ($match as $matchs){

            $team1 = Match::join('team', 'matchs.id_team_1', '=', 'team.id')
                ->select('team.name')
                ->where('team.id', '=', $matchs['id_team_1'])
                ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
                ->get();
            foreach ($team1 as $teams){
                $t1 = $teams->name;
            }

            $team2 = Match::join('team', 'matchs.id_team_2', '=', 'team.id')
                ->select('team.name')
                ->where('team.id', '=', $matchs['id_team_2'])
                ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
                ->get();
            foreach ($team2 as $teams){
                $t2 = $teams->name;
            }
            $tab2[$k] = array('t1' => $t1, 't2' => $t2);
            $k++;
        }
        $j = 0;
        $l = 0;

        //select day_match from matchs where day_match > CURDATE() order by day_match ASC LIMIT 1
//        $time= DB::table('matchs')
//            ->select('day_match')
//            ->where('day_match', '>', DB::raw('curdate()'))
//            ->orderBy('day_match', 'asc')
//            ->limit(1)
//            ->get();
//        $tmp = implode($time);
//        echo $tmp;
//        die();

        return view("match", ["matchpast" => $matchpast, "match" => $match, "tab1" => $tab1, "j" => $j, "tab2" => $tab2, "l" => $l]);

    }

    public function matchDetails($id)
    {

        $i = 0;
        $j = 0;

        $match = Match::find($id);

        $team1 = Match::join('team', 'matchs.id_team_1', '=', 'team.id')
            ->select('team.name')
            ->where('team.id', '=', $match['id_team_1'])
            ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
            ->get();
        foreach ($team1 as $teams) {
            $t1 = $teams->name;
        }

        $team2 = Match::join('team', 'matchs.id_team_2', '=', 'team.id')
            ->select('team.name')
            ->where('team.id', '=', $match['id_team_2'])
            ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
            ->get();
        foreach ($team2 as $teams) {
            $t2 = $teams->name;
        }
        $tab1[$i] = array('t1' => $t1, 't2' => $t2);

        $i++;

        // $tab = array("t1" => $t1, "t2" => $t2);
        // var_dump($tab2);
        //dd($tab1);


        return view("matchDetails", ["match" => $match, "tab1" => $tab1, "j" => $j]);

    }
    public function matchDetailsPast($id)
    {

        $i = 0;
        $j = 0;

        $match = Match::find($id);

        $team1 = Match::join('team', 'matchs.id_team_1', '=', 'team.id')
            ->select('team.name')
            ->where('team.id', '=', $match['id_team_1'])
            ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
            ->get();
        foreach ($team1 as $teams) {
            $t1 = $teams->name;
        }

        $team2 = Match::join('team', 'matchs.id_team_2', '=', 'team.id')
            ->select('team.name')
            ->where('team.id', '=', $match['id_team_2'])
            ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
            ->get();
        foreach ($team2 as $teams) {
            $t2 = $teams->name;
        }
        $tab1[$i] = array('t1' => $t1, 't2' => $t2);

        $i++;

        return view("matchDetailsPast", ["match" => $match, "tab1" => $tab1, "j" => $j]);

    }

}
