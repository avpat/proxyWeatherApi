<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // can add air quality/pollution if needed
        Schema::create('airs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('humidity');
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
        Schema::dropIfExists('airs');
    }
}
