<?php

use Illuminate\Database\Seeder;

class RainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Rain::class, 10)->create();
    }
}
