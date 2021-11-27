<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', "\App\Http\Controllers\HomeController@index")->name("frontend.homepage");

Route::group(['middleware' => 'keycloak-web'], function () {
    Route::get('/auth', "\App\Http\Controllers\DebugController@test")->name("frontend.test.test");
    Route::get('/admin', "\App\Http\Controllers\DebugController@test2")->name("frontend.test.test2");
    Route::get('/mod', "\App\Http\Controllers\DebugController@test3")->name("frontend.test.test3");
});