<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('tour_details')){
        Schema::create('tour_details', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('headerImg');
            $table->integer('price');
            $table->string('startCountry');
            $table->string('returnCountry');
            $table->string('tripStartDate');
            $table->string('tripEndDate');
            $table->string('tripDuration');
            $table->mediumText('tourDesc');
            $table->timestamps();
        });
      }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tour_details');
    }
}
