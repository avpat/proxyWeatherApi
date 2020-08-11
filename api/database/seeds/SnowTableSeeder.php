<?php

use Illuminate\Database\Seeder;

class SnowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Snow::class, 10)->create();
    }
}
