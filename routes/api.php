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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/webcontent','WebPublicationController@index');
Route::post('/webcontent/update','WebPublicationController@update');
Route::post('/webcontent/create','WebPublicationController@store');
Route::get('/webcontent/delete/{id}','WebPublicationController@destroy');
Route::get('/webcontent/resources/{id}','WebPublicationController@resource');
Route::post('/webcontent/saveresource','WebPublicationController@saveresource');
Route::get('/webcontent/deleteresource/{id}','WebPublicationController@deleteresource');

Route::post('/webcontent/update-file-web-pgc','WebPublicationController@updateImgPgc');
Route::post('/webcontent/update-data-web-idea','WebPublicationController@updateDataPgc');
