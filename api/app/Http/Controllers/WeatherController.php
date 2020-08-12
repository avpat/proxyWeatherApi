<?php

namespace App\Http\Controllers;

use App\Forecast;
use App\Http\Resources\WeatherResource;
use App\Http\Resources\WeatherResourceCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\App;
use Validator;

class WeatherController extends Controller
{

    /**
     * Get forecast for the by citycode/countrycode and the app key
     * This function does validation and calls forecasts model
     *
     * @param Request $request
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function getForecastByCodeAndApikey(Request $request)
    {

        $forecast = new Forecast();

        //validation
        $rules = [
            'code'      => 'required|max:4',
            'appId'     => 'required|min:7',
        ];
        $messages = [
            'code.required'      => 'City code / Country code is required',
            'appId.required'     => 'App key is required',
        ];

        $validator = Validator::make(['code' => $request->code, 'appId' => $request->appId ], $rules, $messages);

        //if fails then return error message
        if ($validator->fails()) {
            return response()->json([
                'error' => [
                    'message'       => $validator->errors()->first(),
                    'statusCode'    => 400
                ]
            ], 400);
        }

        return $forecast->getForecastByCodeAndApikey($request->code, $request->appId);
    }

    /**
     *
     * call proxy api to get units list
     * @return string
     */

    public function getTemperatureUnits()
    {
        $apikey = 'xyzzz';
        $apiUrl = 'xyz.com/test/getunits';

        return Http::get($apiUrl, $apikey)->json();
    }



}
