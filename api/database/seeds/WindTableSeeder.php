<?php

use Illuminate\Database\Seeder;

class WindTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Wind::class, 10)->create();
    }
}
