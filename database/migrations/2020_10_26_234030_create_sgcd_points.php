<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSgcdPoints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sgcd_points', function (Blueprint $table) {
            $table->bigIncrements('point_id');

            $table->bigInteger('team_id')->unsigned();

            $table->integer('win');
            $table->integer('lose');
            $table->integer('walkover');
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
        Schema::dropIfExists('sgcd_points');
    }
}
