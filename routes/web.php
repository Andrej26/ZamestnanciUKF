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

Route::resource('UKF', 'UKFController');

Route::get('/login', [
    'as' => 'login', 'uses' => 'UKFController@login'
]);

Route::get('/prihlas', [
    'as' => 'prihlas', 'uses' => 'UKFController@prihlas'
]);