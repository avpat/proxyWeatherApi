<?php

namespace Tests\Feature;

use App\City;
use App\Country;
use App\Weather;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WeatherControllerTest extends TestCase
{

    use RefreshDatabase;

    protected $city;
    protected $weather;
    protected $country, $code, $appid;

    public function setUp():void
    {
        parent::setUp();

        $this->weather = factory(Weather::class,4)->create();
        $this->country = factory(Country::class, 10)->create();
        $this->city = factory(City::class, 10)->create();
        $this->code = City::all()->random(1)->first();
        $this->appid = 'openmaps'; //static

    }

    /**
     * Test get forecast by passing cityname
     *
     * @return void
     */
    public function test_get_forcast_by_citycode_and_apikey()
    {
        $this->get(route('Weather.city', ['code' => $this->code->city_code, 'appId' => $this->appid]))
            ->assertStatus(200);
    }

    /**
     * Test get forecast by passing CountryCode
     *
     * @return void
     */
    public function test_get_forcast_by_correct_citycode_and_alien_api()
    {
       // dd($this->code->city_code);
        $this->get(route('Weather.city', ['code' => $this->code->city_code, 'appId' => 'HHVBIH']))
            ->assertStatus(400);
    }

    /**
     * Test get forecast by passing CountryCode
     *
     * @return void
     */
    public function test_get_forcast_by_correct_apikey_only()
    {
        $this->get(route('Weather.city', ['code' => 'VBSGS', 'appId' => $this->appid]))
            ->assertStatus(400);
    }

}

