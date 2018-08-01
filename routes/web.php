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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/Login', function () {
    return view('Login.Login');
});

Route::get('/success', function () {
    return view('Login.success');
});

Route::get('/about', function () {
    return view('pages.about');
});

/*Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is user ' .$name;
});*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');