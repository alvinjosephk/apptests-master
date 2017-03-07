<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateCustomertableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('customer',function(Blueprint $table){

        $table->bigincrements('reg-id')->primary;

        $table->string('name');
        $table->date('DoB');
        $table->char('gender');
        $table->string('house-no');
        $table->string('street');
        $table->string('locality');
        $table->string('city');
        $table->string('district');
        $table->string('state');
        $table->string('email');
      //  $table->foreign('email')->references('email')->on('users');
        $table->string('nationality');
        $table->bigInteger('aadhaar');

      });
      DB::update("ALTER TABLE customer AUTO_INCREMENT=7777;");
  //  DB::ALTER Table ('cutomer') ADD id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  //  ADD INDEX ('id');
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
