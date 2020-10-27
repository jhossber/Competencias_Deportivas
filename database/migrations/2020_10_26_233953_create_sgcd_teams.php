<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSgcdTeams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sgcd_teams', function (Blueprint $table) {
            $table->bigIncrements('team_id');

            $table->bigInteger('category_id')->unsigned();

            $table->string('name');
            $table->string('description');
            $table->integer('state')->default(1);
            $table->timestamps();

            $table->foreign('category_id')->references('category_id')->on('sgcd_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sgcd_teams');
    }
}
