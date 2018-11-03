<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Team extends Model
{
    protected $table = 'team';

    public static function rankingTeams()
    {
        $teams= DB::select('select * from team order by ranking DESC');
        return($teams);
    }


}
