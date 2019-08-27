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
    return view('index');
});
Route::get('/test2', 'ShowProfile@getInitData');
Route::get('/index', 'ShowProfile@index');
Route::get('/about', 'ShowProfile@about');
Route::get('/article', 'ShowProfile@article');
Route::get('/share', 'ShowProfile@share');
Route::get('/novel', 'ShowProfile@novel');

