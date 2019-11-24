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

Route::get('/', function () {
    return view('welcome');
});

//1. HTTP METHOD: GET
//2. URI: '/'
//3. FUNCTION: Controller@method

Route::get('/test', 'TestController@index')->name('test.index');

// POST, PUT, DELETE : CSRFVERIFY

Route::post('/store', 'TestController@store')->name('test.store');
