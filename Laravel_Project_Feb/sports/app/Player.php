<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table='player';


    public function team()
    {
        return $this->belongsTo('App\Team', 'id_team', 'id');
    }

    public function position()
    {
        return $this->belongsTo('App\Position', 'id_position', 'id');
    }
}