<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSgcdPlaceTeams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sgcd_place_teams', function (Blueprint $table) {
            $table->bigIncrements('place_team_id');

            $table->bigInteger('place_id')->unsigned();
            $table->bigInteger('team_id')->unsigned();

            $table->dateTime('date_time');
            $table->dateTime('date_game');
            $table->timestamps();

            $table->foreign('place_id')->references('place_id')->on('sgcd_places');
            $table->foreign('team_id')->references('team_id')->on('sgcd_teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sgcd_place_teams');
    }
}
