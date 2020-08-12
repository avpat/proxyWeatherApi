<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Air;
use App\City;
use App\Cloud;
use App\Cordinate;
use App\Country;
use App\Rain;
use App\Snow;
use App\Temperature;
use App\Weather;
use App\Wind;
use App\Forecast;

class ForecastTest extends TestCase
{

    use RefreshDatabase;

    protected $city, $weather, $country, $air, $cloud, $rain, $cordinate, $snow, $wind, $temperature, $appid;

    public function setUp(): void
    {
        parent::setUp();

        $this->weather = factory(Weather::class,4)->create();
        $this->country = factory(Country::class, 10)->create();
        $this->city = factory(City::class, 10)->create();

        $this->air = factory(Air::class, 10)->create();
        $this->cloud = factory(Cloud::class, 10)->create();

        $this->cordinate = factory(Cordinate::class, 10)->create();
        $this->rain = factory(Rain::class, 10)->create();
        $this->snow = factory(Snow::class, 10)->create();
        $this->wind = factory(Wind::class, 10)->create();
        $this->temperature = factory(Temperature::class, 10)->create();
        $this->appid = 'openmaps'; //static
    }

    /**
     * Test get forecast by passing cityname
     *
     * @return void
     */
    public function test_get_forcast_by_correct_citycode_and_apikey()
    {

        $code = City::all()->random(1)->first();

        $this->get(route('Weather.city', ['code' => $code->city_code, 'appId' => $this->appid]))
            ->assertStatus(200);
    }

    /**
     *
     * Test get forecast by passing wrong format of citycode/conuntrycode
     *
     * @return void
     */
    public function test_forecast_with_wrong_cityname_format()
    {
        $this->get(route('Weather.city', ['code' => 'gfhgsfvghv', 'appId' => $this->appid]))
            ->assertStatus(400);
    }

    /**
     * Test get forecast by passing countryname
     *
     * @return void
     */
    public function test_forecast_with_wrong_countryname()
    {
        $this->get(route('Weather.city', ['code' => 'nomanscountry', 'appId' => $this->appid]))
            ->assertStatus(400);
    }
}

