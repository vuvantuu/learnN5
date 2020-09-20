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

// Route::get('/', function () {
    // return view('welcome');
// });

//login web
Route::group(['middleware' => 'CheckLogedIn'], function () {
    Route::get('/login','AdminLogin@login');
    Route::post('/login','AdminLogin@postlogin');
});


//home page
Route::group(['middleware' => 'CheckLogedOut'], function () {
    Route::get('/','AdminHome@index');
    Route::get('/logout','AdminHome@logout');
    Route::get('/add','AdminHome@add');
    Route::post('/save','AdminHome@save');
    Route::get('/all','AdminHome@all');
    Route::get('/edit/{id}','AdminHome@edit');
    Route::post('/update/{id}','AdminHome@update');
    Route::get('/del/{id}','AdminHome@del');
});


