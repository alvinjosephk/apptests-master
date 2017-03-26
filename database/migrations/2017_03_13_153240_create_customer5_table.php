<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomer5Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('customer',function(Blueprint $table){

        $table->bigincrements('regid')->primary;
    //   $table->integer('id');
    //   $table->foreign('id')->references('id')->on('users');
        $table->string('name');
        $table->date('DoB');
        $table->char('gender');
        $table->string('houseno');
        $table->string('street');
        $table->string('locality');
        $table->string('city');
        $table->string('district');
        $table->string('state');
      //  $table->string('email');

        $table->string('nationality');
        $table->bigInteger('aadhaar');

      });
      DB::update("ALTER TABLE customer AUTO_INCREMENT=7777;");//
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
