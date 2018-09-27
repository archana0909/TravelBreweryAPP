<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('tour_cities')){

        Schema::create('tour_cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tourCityTitle');
            $table->text('description');
            $table->string('photo',400);
            $table->integer('trip_id')->unsigned();
            $table->timestamps();
            $table->foreign('trip_id')->references('id')
           ->on('tour_details')->onDelete('cascade');
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
        Schema::dropIfExists('tour_cities');
    }
}
