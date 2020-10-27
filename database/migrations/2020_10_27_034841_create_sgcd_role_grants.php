<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSgcdRoleGrants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sgcd_role_grants', function (Blueprint $table) {

            $table->bigIncrements('role_grant_id');

            $table->bigInteger('role_id')->unsigned();
            $table->bigInteger('grant_id')->unsigned();
            $table->timestamps();

            $table->foreign('role_id')->references('role_id')->on('sgcd_roles');
            $table->foreign('grant_id')->references('grant_id')->on('sgcd_grants');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sgcd_role_grants');
    }
}
