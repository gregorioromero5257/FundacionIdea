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

Route::get('/', 'HomeController@inicio');


Route::get('equipo', function () {
    return view('equipo');
});
Route::get('equipo/{id}', 'TeamController@getdata');

Route::get('acerca', function (){
  return view('acerca');
});

Route::get('/avisoprivacidad', function () {
    return view('avisoprivacidad');
});

// Route::get('');


Route::get('vacantes', 'VacancieController@vacancy');
Route::get('vacantes/{id}', 'VacancieController@getvacancy');

Route::get('publications', 'PublicationController@getPublications');
Route::get('getByTag/{id}', 'PublicationController@getByTag');
Route::get('publication/{id}', 'PublicationController@getByPost');
Route::get('publicationsearch/{id}', 'PublicationController@getByPostSearch');
Route::get('getall', 'PublicationController@getAll');
Route::post('update-publication', 'PublicationController@update');

Route::get('prensa', 'PrensaController@getPrensa');
Route::get('prensadetalle/{id}', 'PrensaController@getPrensaDetalle');

Route::post('send-email', 'EmailController@send');
