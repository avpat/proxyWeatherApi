<?php

use Illuminate\Database\Seeder;

class AirTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Air::class, 5)->create();
    }
}
