<?php

namespace App\Http\Controllers;

use App\Http\Resources\WeatherResource;
use App\Http\Resources\WeatherResourceCollection;
use Illuminate\Http\Request;
use App\Weather;



class WeatherController extends Controller
{
    /**
     * @param Request $request
     * @return WeatherResourceCollection
     */
    public function getWeather(Request $request) : WeatherResourceCollection
    {

        //get the weather report for the provided citycode and appid

//        $request->validate([
//            'cityid' => 'required',
//            'appid' => 'required',
//        ]);

        $cityCode = $request->cityCode;
//
//        $weatherReport = Weather::where('id', '=', 80)->with(['city' => function($query) use ($cityCode){
//            $query->where('city_code', '=', $cityCode);
//        }]);

        $weatherReport = Weather::find(80)->city;


//        $weatherReport = Weather::where('id', '=', 80)->with(['city' => function($query) use ($cityCode){
//            $query->where('city_code', '=', $cityCode);
//        }]);

//        $weatherReport->cities;
      //  dd($weatherReport);
        return new WeatherResourceCollection($weatherReport);
    }

    public function rules()
    {
        return [
            'cityid' => 'required|max:3',
            'appid' => 'required',
        ];
    }

    public function index(): WeatherResourceCollection
    {
        return new WeatherResourceCollection(Weather::class);
    }
}
