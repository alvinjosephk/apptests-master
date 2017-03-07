<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobnum2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mobnum', function (Blueprint $table) {
        $table->biginteger('number')->unique;
        $table->string('sim_status');
        $table->string('sim_type');
        $table->string('num_type');
        $table->float('price');
        $table->increments('service_id');
        $table->foreign('service_id')->references('service_id')->on('newservices');
   });  //  //
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
