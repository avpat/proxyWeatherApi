<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCloudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clouds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cover');
            $table->unsignedBigInteger('weather_id');
            $table->foreign('weather_id')->references('id')->on('weather')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clouds');
    }
}
