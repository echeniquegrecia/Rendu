<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bets extends Model
{
    protected $table = "bet";

    protected $fillable = [
        'email', 'id_team', 'money', 'id_matchs',
    ];
}
