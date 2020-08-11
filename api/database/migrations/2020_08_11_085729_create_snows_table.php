<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSnowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //assuming snow will be counted as min and max value
        Schema::create('snows', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('min_snow');
            $table->integer('max_snow');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('snows');
    }
}
