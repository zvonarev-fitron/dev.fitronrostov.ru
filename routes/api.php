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


//Route::post('cb/{table}/{field}/{onoff}/{id}', 'Admin\DoingController@changeCB')->middleware('auth:api')->name('cb');


//Route::prefix('cb')->middleware('auth:api')->group(function(){
//    Route::prefix('doings')->group(function(){
//        Route::post('{field}/{onoff}/{id}', 'Admin\DoingController@changeCB')->name('doings.cb');
//    });
//    Route::prefix('users')->group(function(){
//        Route::post('{field}/{onoff}/{id}', 'Admin\UserController@changeCB')->name('users.cb');
//    });
//    Route::prefix('roles')->group(function(){
//        Route::post('{field}/{onoff}/{id}', 'Admin\RoleController@changeCB')->name('roles.cb');
//    });
//});
