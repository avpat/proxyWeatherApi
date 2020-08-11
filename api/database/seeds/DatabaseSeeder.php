<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(WeatherTableSeeder::class);
        $this->call(RainTableSeeder::class);
        $this->call(WindTableSeeder::class);
        $this->call(CloudTableSeeder::class);
        $this->call(SnowTableSeeder::class);
        $this->call(AirTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(TemperatureTableSeeder::class);
        $this->call(CordinateTableSeeder::class);

       // $this->call(AddressTableSeeder::class);
       // $this->call(WeatherTableSeeder::class);

    }
}
