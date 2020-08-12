<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//by city id and countrycode

//Route::apiResource('/data', 'WeatherController');

Route::get('/data/code={code}&appid={appId}', 'WeatherController@getForecastByCodeAndApikey')->name('Weather.city');

Route::get('/temperature/units', 'WeatherController@getTemperatureUnits')->name('Temperature.units');
