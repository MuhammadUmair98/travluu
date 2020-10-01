<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->unqiue();
            $table->string('Brand');
            $table->string('Model');
            $table->integer('Year');
            $table->string('License_plate');
            $table->string('transport_type');
            $table->string('pass_seats');
            $table->string('lugg_places');
            $table->string('color');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('my_vehicles');
    }
}
