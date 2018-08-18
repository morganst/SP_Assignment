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

Route::get('/', 'PagesController@index');


Route::resource('volunteers', 'VolunteersController');
Auth::routes();

Route::resource('opportunities', 'OpportunityController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/search', 'SearchController@search');
Route::get('/searchOpp', 'SearchController@searchOpp');

Route::get('/filter', 'FilterController@filter');
Route::get('/multiFilter', 'FilterController@multiFilter');
Route::get('/filterAlpha', 'FilterController@filterAlpha');
Route::get('/filterTime', 'FilterController@filterTime');
Route::get('/Oppfilter', 'FilterController@Oppfilter');

Route::get('/matches', 'PagesController@matches');

