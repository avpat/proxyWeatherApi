<?php

use Illuminate\Database\Seeder;

class CordinateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cordinate::class, 10)->create();
    }
}
