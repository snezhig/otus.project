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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('App\Http\Controllers\Api')->group(function () {
    Route::get('/achievements/index', 'AchievementController@index');
    Route::post('/achievements', 'AchievementController@store');
    Route::put('/achievements/{achievement}', 'AchievementController@update');
    Route::delete('/achievements/{achievement}', 'AchievementController@destroy');
});
