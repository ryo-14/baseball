<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhysicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physicals', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->BigInteger('user_id')->unsigned();
            $table->BigInteger('player_id')->unsigned();
            $table->integer('power')->nullable();
            $table->integer('meet')->nullable();
            $table->integer('speed')->nullable();
            $table->integer('defence')->nullable();
            $table->string('comment')->nullable();
            $table->timestamps();
            
            //$table->foreign('user_id')->references('id')->on('users');
            $table->foreign('player_id')->references('id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('physicals');
    }
}
