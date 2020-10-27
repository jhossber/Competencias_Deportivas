<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSgcdPlayers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sgcd_players', function (Blueprint $table) {
            $table->bigIncrements('player_id');

            $table->bigInteger('team_id')->unsigned();

            $table->integer('ci')->unique();
            $table->string('name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->dateTime('date_birth');
            $table->string('photo')->default('default.png');
            $table->string('email')->unique();
            $table->integer('delegate')->default(0);
            $table->integer('state')->default(1);
            $table->timestamps();

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
        Schema::dropIfExists('sgcd_players');
    }
}
