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

Route::get('/Charts','UKFController@chart')->name('charts');
Route::prefix('UKF')->group(function() {
    Route::get('/', 'UKFController@index')->name('ukf');
    Route::get('/Profil/{id}', 'UKFController@profil')->name('profil');
    Route::get('/ZProfil/{id}', 'UKFController@zprofil')->name('zprofil');

    Route::post('/PridanieKomentaru', 'UKFController@pridaniekomentaru')->name('komentar.store');

    Route::post('/search', 'AdvancedSearchController@advancesearch')->name('advanced_search');

    // View-y Fakúlt
    Route::get('/fpv', function(){
        return view('UKF/Fakulty/fakulta_fpv'); // Your Blade template name
    });
    Route::get('/ff', function(){
        return view('UKF/Fakulty/fakulta_ff'); // Your Blade template name
    });
    Route::get('/fss', function(){
        return View('UKF/Fakulty/fakulta_fss'); // Your Blade template name
    });
    Route::get('/fsvz', function(){
        return View('UKF/Fakulty/fakulta_fsvz'); // Your Blade template name
    });
    Route::get('/pf', function(){
        return View('UKF/Fakulty/fakulta_pf'); // Your Blade template name
    });

});

// Admin tables!!!!!
//////////////////////////////////////////////////////////////////////


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

    //Ostatné možnosti
    Route::get('/profil', 'ZamestnanecController@profil')->name('zames.profil');
    Route::get('/publikacie', 'ZamestnanecController@publikacie')->name('zames.publikacie');

    //Zobrazenie Katedier
    Route::get('/FPV', 'ZamestnanecController@fpv')->name('Katedry.FPV');
    Route::get('/FF', 'ZamestnanecController@ff')->name('Katedry.FF');
    Route::get('/FSVaZ', 'ZamestnanecController@fsvaz')->name('Katedry.FSVaZ');
    Route::get('/FSŠ', 'ZamestnanecController@fsš')->name('Katedry.FSŠ');
    Route::get('/PF', 'ZamestnanecController@pf')->name('Katedry.PF');
    Route::get('/Ostatne', 'ZamestnanecController@ostatne')->name('Katedry.Ostatne');

    //Zmena hesla
    Route::post('/heslo/email', 'Auth\ZamestnanecForgotPasswordController@sendResetLinkEmail')->name('zame.password.email');
    Route::get('/heslo/reset', 'Auth\ZamestnanecForgotPasswordController@showLinkRequestForm')->name('zame.password.request');
    Route::post('/heslo/reset', 'Auth\ZamestnanecResetPasswordController@reset');
    Route::get('/heslo/reset/{token}', 'Auth\ZamestnanecResetPasswordController@showResetForm')->name('zame.password.reset');
});



Route::prefix('Admin')->group(function() {

    //Tablulka zamestnancov
    Route::get('/TabZamestnanci', 'DBControllers\DBZamestnanci@index')->name('TabZamestnanci.index');
    Route::post('/TabZamestnanci', 'DBControllers\DBZamestnanci@store')->name('TabZamestnanci.store');
    Route::get('/TabZamestnanci/Vytvorenie_zamestnanca', 'DBControllers\DBZamestnanci@create')->name('TabZamestnanci.create');
    Route::get('/TabZamestnanci/{id}', 'DBControllers\DBZamestnanci@show')->name('TabZamestnanci.show');
    Route::match(['put','patch'],'/TabZamestnanci/{id}', 'DBControllers\DBZamestnanci@update')->name('TabZamestnanci.update');
    Route::get('/TabZamestnanci/{id}/Úprava_zamestnanca', 'DBControllers\DBZamestnanci@edit')->name('TabZamestnanci.edit');

    Route::get('Zmena_stavu0/{id}',[
        'as'=>'zmena_stavu0', 'uses'=>'DBControllers\DBZamestnanci@hide'
    ]);

    Route::get('Zmena_stavu1/{id}',[
        'as'=>'zmena_stavu1', 'uses'=>'DBControllers\DBZamestnanci@unhide'
    ]);


    //Tablulka rolý
    Route::get('/TabRola', 'DBControllers\DBRola@index')->name('TabRola.index');
    Route::post('/TabRola', 'DBControllers\DBRola@store')->name('TabRola.store');
    Route::get('/TabRola/Vytvorenie_role', 'DBControllers\DBRola@create')->name('TabRola.create');
    Route::get('/TabRola/{id}', 'DBControllers\DBRola@show')->name('TabRola.show');
    Route::match(['put','patch'],'/TabRola/{id}', 'DBControllers\DBRola@update')->name('TabRola.update');
    Route::get('/TabRola/{id}/Úprava_role', 'DBControllers\DBRola@edit')->name('TabRola.edit');
    Route::delete('/TabRola/{id}', 'DBControllers\DBRola@destroy')->name('TabRola.delete');

    //Tablulka fakúlt
    Route::get('/TabFakulta', 'DBControllers\DBFakulta@index')->name('TabFakulta.index');
    Route::post('/TabFakulta', 'DBControllers\DBFakulta@store')->name('TabFakulta.store');
    Route::get('/TabFakulta/Vytvorenie_role', 'DBControllers\DBFakulta@create')->name('TabFakulta.create');
    Route::get('/TabFakulta/{id}', 'DBControllers\DBFakulta@show')->name('TabFakulta.show');
    Route::match(['put','patch'],'/TabFakulta/{id}', 'DBControllers\DBFakulta@update')->name('TabFakulta.update');
    Route::get('/TabFakulta/{id}/Úprava_fakulty', 'DBControllers\DBFakulta@edit')->name('TabFakulta.edit');
    Route::delete('/TabFakulta/{id}', 'DBControllers\DBFakulta@destroy')->name('TabFakulta.delete');

    //Tablulka katedier
    Route::get('/TabKatedra', 'DBControllers\DBKatedra@index')->name('TabKatedra.index');
    Route::post('/TabKatedra', 'DBControllers\DBKatedra@store')->name('TabKatedra.store');
    Route::get('/TabKatedra/Vytvorenie_katedry', 'DBControllers\DBKatedra@create')->name('TabKatedra.create');
    Route::get('/TabKatedra/{id}', 'DBControllers\DBKatedra@show')->name('TabKatedra.show');
    Route::match(['put','patch'],'/TabKatedra/{id}', 'DBControllers\DBKatedra@update')->name('TabKatedra.update');
    Route::get('/TabKatedra/{id}/Úprava_katedry', 'DBControllers\DBKatedra@edit')->name('TabKatedra.edit');
    Route::delete('/TabKatedra/{id}', 'DBControllers\DBKatedra@destroy')->name('TabKatedra.delete');

    //Tablulka projektov
    Route::get('/TabProjekt', 'DBControllers\DBProjekty@index')->name('TabProjekt.index');
    Route::post('/TabProjekt', 'DBControllers\DBProjekty@store')->name('TabProjekt.store');
    Route::get('/TabProjekt/Vytvorenie_projektu', 'DBControllers\DBProjekty@create')->name('TabProjekt.create');
    Route::get('/TabProjekt/{id}', 'DBControllers\DBProjekty@show')->name('TabProjekt.show');
    Route::match(['put','patch'],'/TabProjekt/{id}', 'DBControllers\DBProjekty@update')->name('TabProjekt.update');
    Route::get('/TabProjekt/{id}/Úprava_projektu', 'DBControllers\DBProjekty@edit')->name('TabProjekt.edit');
    Route::delete('/TabProjekt/{id}', 'DBControllers\DBProjekty@destroy')->name('TabProjekt.delete');

    //Tablulka publikácií
    Route::get('/TabPublikacia', 'DBControllers\DBPublikacie@index')->name('TabPublikacia.index');
    Route::post('/TabPublikacia', 'DBControllers\DBPublikacie@store')->name('TabPublikacia.store');
    Route::get('/TabPublikacia/Vytvorenie_publikácie', 'DBControllers\DBPublikacie@create')->name('TabPublikacia.create');
    Route::get('/TabPublikacia/{id}', 'DBControllers\DBPublikacie@show')->name('TabPublikacia.show');
    Route::match(['put','patch'],'/TabPublikacia/{id}', 'DBControllers\DBPublikacie@update')->name('TabPublikacia.update');
    Route::get('/TabPublikacia/{id}/Úprava_publikácie', 'DBControllers\DBPublikacie@edit')->name('TabPublikacia.edit');
    Route::delete('/TabPublikacia/{id}', 'DBControllers\DBPublikacie@destroy')->name('TabPublikacia.delete');

    //Prihlasenie admin
    Route::get('/', 'ZamestnanecController@adminn')->name('admin.dashboard');
});



Route::get('/dbApi', [
    'as' => 'dbApi', 'uses' => 'DbConnectTest@CopyData'
]);

Route::get('/parseTest', [
        'as' => 'parseTest', 'uses' => 'DbConnectTest@RozparsujMenoNaMail'
        ]);
