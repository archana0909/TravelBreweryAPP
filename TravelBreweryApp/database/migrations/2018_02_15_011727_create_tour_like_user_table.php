<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourLikeUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('tour_like_user')){
          Schema::create('tour_like_user', function (Blueprint $table) {
            $table->integer('tour_id')->unsigned();
            $table->foreign('tour_id')->references('id')
                  ->on('tour_details')->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')
                  ->on('users')->onDelete('cascade');
              $table->timestamps();
              $table->primary(['tour_id', 'user_id']);
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
        Schema::dropIfExists('tour_like_user');
    }
}
