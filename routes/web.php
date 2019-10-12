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
    return view('home');
});

Route::post('/tes',[
    'uses' => 'MainController@roomVideo',
    'as' => 'roomVideo'
]);

Route::post('/check',[
    'uses' => 'MainController@checkFull',
    'as' => 'roomVideo'
]);


Route::get('/add',[
    'uses' => 'MainController@add',
    'as' => 'add'
]);


Route::get('/sub',[
    'uses' => 'MainController@sub',
    'as' => 'sub'
]);