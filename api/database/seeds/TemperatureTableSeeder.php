<?php

use Illuminate\Database\Seeder;

class TemperatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Temperature::class, 10)->create();
    }
}
