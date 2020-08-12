<?php

namespace App\Http\Controllers;

use App\Forecast;
use App\Http\Resources\WeatherResource;
use App\Http\Resources\WeatherResourceCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Validator;

class WeatherController extends Controller
{

    /**
     * Get forecast for the city by citycode and the app key
     * This function does validation and calls forecasts model
     *
     * @param Request $request
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function getForecastByCityCodeAndApikey(Request $request)
    {

        $forecast = new Forecast();

        //validation
        $rules = [
            'cityCode'  => 'required|max:4',
            'appId'     => 'required',
        ];
        $messages = [
            'cityCode.required'  => 'City code is required',
            'appId.required'     => 'App key is required',
        ];

        $validator = Validator::make(['cityCode' => $request->cityCode, 'appId' => $request->appId ], $rules, $messages);

        //if fails then return error message
        if ($validator->fails()) {
            return response()->json([
                'error' => [
                    'message'       => $validator->errors()->first(),
                    'statusCode'    => 400
                ]
            ], 400);
        }

        return $forecast->getForecastByCityCodeAndApikey($request->cityCode, $request->appId);
    }

}
