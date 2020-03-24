<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'apiJwt'], function (){
    Route::get('/user', 'Api\UserController@index');
    Route::get('/user/me', 'Api\AuthController@me');

    Route::post('/logout', 'Api\AuthController@logout');
    Route::post('/refresh', 'Api\AuthController@refresh');
});

Route::post('/login', 'Api\AuthController@login');
