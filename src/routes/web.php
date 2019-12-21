<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\CityWeather;
use App\Http\Controllers\getCity;

Route::get('/', function () {
    return view('welcome');
});

//task 1 - kiev
Route::any('/kiev', 'WeatherKiev@index')->name('kiev');

//task 2 - ::get
Route::get('/{name}', function ($name) {
    $obj = new GetCity();
    return view('get', $obj->getIndex($name));
});

//task 3 - ::post
Route::post('/cityWeather', 'CityWeather@postIndex')->name('postCity');
