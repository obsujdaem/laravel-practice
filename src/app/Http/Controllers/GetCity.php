<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetCity extends Controller
{
    public function getIndex($name)
    {

        $apiKey = "43cbc7cce9f16baab44a2d0e597478c6";
        $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?q=" . $name . "&lang=en&units=metric&APPID=" . $apiKey;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);

        curl_close($ch);
        $data = json_decode($response);

        return ['data' => $data];
    }
}
