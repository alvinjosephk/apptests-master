<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('Offer', function (Blueprint $table) {
          $table->string('ServiceId')->unique;
          $table->float('Price');
          $table->string('offer');
          $table->string('category');
     });
        //
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
