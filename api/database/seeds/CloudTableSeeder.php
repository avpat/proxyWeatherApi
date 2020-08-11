<?php

use Illuminate\Database\Seeder;

class CloudTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cloud::class, 10)->create();
    }
}
