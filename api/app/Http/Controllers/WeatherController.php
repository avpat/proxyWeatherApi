<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Weather;

class WeatherController extends Controller
{

    public function index()
    {
        return Weather::all();

    }
}
