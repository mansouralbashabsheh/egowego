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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get("/ReachUs","ReachUsController@index");
Route::post("/ReachUs","ReachUsController@store");
Route::get('/EgoWego',function()
{
   return view ('layouts.EgoWego');

})->name('EgoWego');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider')->name('logins');
Route::get('login/{provider}/callback','Auth\LoginController@handleProviderCallback');