<?php

use Illuminate\Http\Request;

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
Route::get('/types/{API_KEY}','ApiController@types');
Route::get('/types/{type}/tests/{API_KEY}','ApiController@tests');
Route::get('/search/{test}/{API_KEY}','ApiController@search');
