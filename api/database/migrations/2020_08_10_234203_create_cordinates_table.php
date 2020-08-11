<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCordinatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Latitudes range from -90 to +90 (degrees), so DECIMAL(10, 8) is ok for that, but longitudes range from -180 to +180 (degrees) so you need DECIMAL(11, 8).
        Schema::create('cordinates', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('longitude', 11, 8);
            $table->decimal('latitude', 11, 8);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cordinates');
    }
}
