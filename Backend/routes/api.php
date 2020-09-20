<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('tuu', function(Request $request){
   
});
 // login 
 Route::post('UPdCwrxPBFwv','ApiController@signin');

 //register
 Route::post('DowndCxxPBFrs','ApiController@signup');

// youtube data
Route::post('Dfjnskenbhd','ApiController@youtubelist');

 //upload 
 Route::post('tyshdhifihbsb','ApiController@upload');
//get users info
Route::post('riywiushysh','ApiController@getuserinfo');
