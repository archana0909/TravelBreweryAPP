<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourInclExclTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('tour_incl_excl')){

        Schema::create('tour_incl_excl', function (Blueprint $table) {
            $table->integer('tour_id')->unsigned();
            $table->foreign('tour_id')->references('id')
                  ->on('tour_details')->onDelete('cascade');

            $table->integer('inc_excl_id')->unsigned();
            $table->foreign('inc_excl_id')->references('id')
                  ->on('incl_excls')->onDelete('cascade');

            $table->timestamps();
            $table->primary(['tour_id', 'inc_excl_id']);

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
        Schema::dropIfExists('tour_incl_excl');
    }
}
