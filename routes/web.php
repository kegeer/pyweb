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


Route::get('/', 'PageController@index');
Route::get('/microbiome', 'PageController@microbiome');
Route::get('/pathogen', 'PageController@pathogen');
Route::get('/us', 'PageController@us');
Route::get('/hire', 'PageController@hire');
Route::get('/partner', 'PageController@partner');
Route::get('/baby', 'PageController@baby');
Route::get('/mum', 'PageController@mum');
Route::get('/obesity', 'PageController@obesity');
Route::get('/diabetes', 'PageController@diabetes');
Route::get('/cardio', 'PageController@cardio');
Route::get('/baba', 'PageController@baba');
