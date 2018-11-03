<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
  protected $table = "matchs";

  protected $fillable = [
    'id_team_1', 'id_team_2', 'weather', 'city', 'score_team_1', 'score_team_2', 'created-at',
  ];

  public function team1()
     {
         return $this->belongsTo(App\Team::class, 'id', 'id_team_1');

      }

      public function team2()
         {
             return $this->belongsTo(App\Team::class, 'id', 'id_team_2');

          }


}
