<?php
//Let's start thinning the controller
namespace App;

use Illuminate\Database\Eloquent\Model;


class Forecast extends Model
{
    /**
     * based on the openweathermap api https://samples.openweathermap.org/data/2.5/weather?id=2172797&appid=439d4b804bc8187953eb36d2a8c26a02
     *
     * @param $code
     * @param $appId
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function getForecastByCodeAndApikey($code, $appId)
    {
        //define an array for the forecast
        $forecastData = [];
        //check if the appkey is valid
        $authorised = Weather::where('appid', $appId)->first();

        //is appkey valid?
        if($authorised)
        {
            //get the city and weather id by city code
            if(!empty($code))
            {
                $city = City::where('city_code', $code)->first();
                //if it is not a city then check if it is a country
                if (!$city) {
                    $country = Country::where('code', $code)->first();
                    if($country) {
                        //get capital of the found country
                        $city = City::where('weather_id', $authorised->id)
                            ->where('is_capital', 1)->first();
                    }
                }
                //if city is not valid then send appropriate error message
                if (!$city) {
                    array_push($forecastData, [
                        'error' => [
                            'message'       => 'Bad request. City or Country not found',
                            'statusCode'    => 400
                        ]
                    ]);

                } else {
                    //get weather forecast for the city
                    $forecast = Weather::find($city->weather_id);

                    //lets crerate a separate array for weather as we need to format output
                    $weatherData =[];

                    array_push($weatherData, [
                        'duration'      => $forecast['forecast_period'],
                        'source'        => $forecast['source'],
                        'date'          => $forecast['created_at']->format('m-d-Y h:i A'),
                    ]);

                    if($forecast)
                    {
                        //add all available relationships
                        array_push($forecastData, [
                            'coord'         => $forecast->cordinate,
                            'weather'       => $weatherData,
                            'city'          => $forecast->city,
                            'country'       => $forecast->country,
                            'air'           => $forecast->air,
                            'rain'          => $forecast->rain,
                            'snow'          => $forecast->snow,
                            'cloud'         => $forecast->cloud,
                            'temperature'   => $forecast->temperature,
                            'wind'          => $forecast->wind,
                        ]);
                    }
                }
            }
        } else {
            //send appropriate error message
            array_push($forecastData, [
                'error' => [
                    'message'       => 'Bad request. App Key is not valid',
                    'statusCode'    => 400
                ]
            ]);
        }

        return $forecastData;
    }

}

