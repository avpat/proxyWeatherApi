<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeatherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('weather', function (Blueprint $table) {
//            $table->increments('id');
//            $table->unsignedInteger('rain_id');
//            $table->unsignedInteger('snow_id');
//            $table->unsignedInteger('wind_id');
//            $table->unsignedInteger('temperature_id');
//            $table->unsignedInteger('cloud_id');
//            $table->unsignedInteger('air_id');
//            $table->unsignedInteger('country_id');
//            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade')->onUpdate('cascade');
//            $table->foreign('cloud_id')->references('id')->on('clouds')->onDelete('cascade')->onUpdate('cascade');
//            $table->foreign('rain_id')->references('id')->on('rains')->onDelete('cascade')->onUpdate('cascade');
//            $table->foreign('wind_id')->references('id')->on('winds')->onDelete('cascade')->onUpdate('cascade');
//            $table->foreign('snow_id')->references('id')->on('snows')->onDelete('cascade')->onUpdate('cascade');
//            $table->foreign('temperature_id')->references('id')->on('temperatures')->onDelete('cascade')->onUpdate('cascade');
//            $table->foreign('air_id')->references('id')->on('airs')->onDelete('cascade')->onUpdate('cascade');
//            $table->timestamps();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weather');
    }
}
