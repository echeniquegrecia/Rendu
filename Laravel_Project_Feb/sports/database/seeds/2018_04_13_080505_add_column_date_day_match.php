<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnDateDayMatch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //public $dateTimeFormat = 'Y-m-d H:i:s';

    public function up()
    {
        Schema::table('matchs', function (Blueprint $table) {
            $table->datetime('day_match')->nullable($value = true);
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matchs', function (Blueprint $table) {
            $table->dropColumn('day_match');

        });
    }
}
