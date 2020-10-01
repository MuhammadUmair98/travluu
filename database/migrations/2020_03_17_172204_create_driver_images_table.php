<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->integer('user_id');
            $table->mediumText('image1')->nullable();
            $table->mediumText('image2')->nullable();
            $table->mediumText('image3')->nullable();
            $table->mediumText('image4')->nullable();
            $table->mediumText('image5')->nullable();
            $table->mediumText('image6')->nullable();
            $table->mediumText('image7')->nullable();
            $table->mediumText('image8')->nullable();
            $table->mediumText('image9')->nullable();
            $table->mediumText('image10')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driver__images');
    }
}
