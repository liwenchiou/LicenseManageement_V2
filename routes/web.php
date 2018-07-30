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
    return redirect()->route('event.index');
});

Route::resource('crud', 'Web\CRUDController');
Route::resource('company', 'Web\CompanyController');
Route::resource('lisence', 'Web\LisenceController');

Route::resource('event', 'Web\EventController');