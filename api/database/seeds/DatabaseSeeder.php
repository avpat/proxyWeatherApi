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
//        factory(App\Rain::class, 10)->create();
//        factory(App\Wind::class, 10)->create();
//        factory(App\Snow::class, 10)->create();
//        factory(App\Temperature::class, 10)->create();
//        factory(App\Cloud::class, 10)->create();
//        factory(App\Air::class, 10)->create();

        $this->call(RainTableSeeder::class);
        $this->call(WindTableSeeder::class);
        $this->call(CloudTableSeeder::class);
        $this->call(SnowTableSeeder::class);
        $this->call(AirTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(TemperatureTableSeeder::class);

       // $this->call(AddressTableSeeder::class);
       // $this->call(WeatherTableSeeder::class);

    }
}
