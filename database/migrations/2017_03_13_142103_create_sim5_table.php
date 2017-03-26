<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSim5Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      {Schema::create('sim', function (Blueprint $table) {
            $table->increments('simId')->unique;
            $table->biginteger('number')->unsigned();
            $table->biginteger('reg-id')->unsigned()->default(0000);
            // $table->foreign('reg-id')->references('reg-id')->on('customer');

          });  ////
    }
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
