<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->BigInteger('team_id')->unsigned();
          $table->string('name');
          $table->string('name_hira');
          $table->string('number');
          $table->string('position');
          $table->string('status')->nullable();
          $table->string('wiki')->nullable();
          $table->string('image_path')->nullable();
          $table->timestamps();
          
          $table->foreign('team_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
