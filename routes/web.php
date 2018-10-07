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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/','MainController@index');
Route::get('/dashboard','MainController@dashboard');

//move these to the api file
Route::get('/api/types','');
Route::get('/api/types/{type}/tests','')->where('type','[0-9]');
Route::get('/api/tests','');
/////////////////////////////////////


Route::get('/centers','MedicalCentersController@index');
Route::get('/centers/{center}/','MedicalCentersController@center')->where('center', '[0-9]+');
Route::get('/centers/create','MedicalCentersController@create');
Route::post('/centers/save','MedicalCentersController@save');
Route::post('/centers/{center}/update','MedicalCentersController@update');
Route::get('/centers/{center}/delete','MedicalCentersController@delete');

Route::get('/tests','MedicalTestsController@index');
Route::get('/tests/{test}','MedicalTestsController@test');
Route::get('/tests/create','MedicalTestsController@create');
Route::post('/tests/save','MedicalTestsController@save');
Route::post('/tests/{test}/update','MedicalTestsController@update');
Route::get('/tests/{test}/delete','MedicalTestsController@delete');

Route::get('/prices','MedicalTestPricesController@index');
Route::get('/prices/{price}','MedicalTestPricesController@price');
Route::get('/prices/create','MedicalTestPricesController@create');
Route::post('/prices/save','MedicalTestPricesController@save');
Route::post('/prices/{price}/update','MedicalTestPricesController@update');
Route::get('/prices/{price}/delete','MedicalTestPricesController@delete');

Route::get('/login','SessionsController@create');
Route::get('/logout','SessionsController@save');
Route::post('/logout','SessionsController@destroy');
