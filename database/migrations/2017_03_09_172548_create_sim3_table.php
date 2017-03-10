<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSim3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sim', function (Blueprint $table) {
            $table->increments('simId')->unique;
            $table->biginteger('number')->unsigned();
             //$table->foreign('number')->references('number')->on('mobnum');
            $table->biginteger('reg-id')->unsigned()->nullable;
             $table->foreign('reg-id')->references('reg-id')->on('customer');

          });  //
          //  //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
