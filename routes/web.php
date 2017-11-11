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

use GuzzleHttp\Client;


Route::get('/', function () {
    return view('welcome');
});

Route::get('UKF', 'UKFController@index')->name('ukf');



// Admin tables!!!!!
//////////////////////////////////////////////////////////////////////

Route::get('Zmena_stavu0/{id}',[
    'as'=>'zmena_stavu0', 'uses'=>'DBControllers\DBZamestnanci@hide'
]);

Route::get('Zmena_stavu1/{id}',[
    'as'=>'zmena_stavu1', 'uses'=>'DBControllers\DBZamestnanci@unhide'
]);

//dalsie tabulkz este nie su...

//////////////////////////////////////////////////////////////////////////

Route::get('/picture/{filename}', function ($filename)
{
    $path = storage_path() . '/picture/' . $filename;

    if(!File::exists($path)) abort(404);

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
})->name('picture');

// Prihlasenie
////////////////////////////////////////////////////////////////
Auth::routes();

Route::prefix('Zamestnanec')->group(function(){

    //Prihlasenie zamestnanec
    Route::get('/logout', 'ZamestnanecController@logout')->name('zames.logout');
    Route::post('/login', 'Auth\ZamestnanecLoginController@login')->name('zames.login');
    Route::get('/', 'ZamestnanecController@index')->name('zames.dashboard');
});

Route::prefix('Admin')->group(function() {

    //Tablulka zamestnancov
    Route::get('/TabZamestnanci', 'DBControllers\DBZamestnanci@index')->name('TabZamestnanci.index');
    Route::post('/TabZamestnanci', 'DBControllers\DBZamestnanci@store')->name('TabZamestnanci.store');
    Route::get('/TabZamestnanci/Vytvorenie_zamestnanca', 'DBControllers\DBZamestnanci@create')->name('TabZamestnanci.create');
    Route::get('/TabZamestnanci/{id}', 'DBControllers\DBZamestnanci@show')->name('TabZamestnanci.show');
    Route::match(['put','patch'],'/TabZamestnanci/{id}', 'DBControllers\DBZamestnanci@update')->name('TabZamestnanci.update');
    Route::get('/TabZamestnanci/{id}/Úprava_zamestnanca', 'DBControllers\DBZamestnanci@edit')->name('TabZamestnanci.edit');

    //Tablulka rolý
    Route::get('/TabRola', 'DBControllers\DBRola@index')->name('TabRola.index');
    Route::post('/TabRola', 'DBControllers\DBRola@store')->name('TabRola.store');
    Route::get('/TabRola/Vytvorenie_role', 'DBControllers\DBRola@create')->name('TabRola.create');
    Route::get('/TabRola/{id}', 'DBControllers\DBRola@show')->name('TabRola.show');
    Route::match(['put','patch'],'/TabRola/{id}', 'DBControllers\DBRola@update')->name('TabRola.update');
    Route::get('/TabRola/{id}/Úprava_role', 'DBControllers\DBRola@edit')->name('TabRola.edit');
    Route::delete('/TabRola/{id}', 'DBControllers\DBRola@destroy')->name('TabRola.delete');

    //Prihlasenie admin
    Route::get('/logout', 'AdminController@logout')->name('admin.logout');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::get('/dbApi', [
    'as' => 'dbApi', 'uses' => 'DbConnectTest@CopyData'
]);