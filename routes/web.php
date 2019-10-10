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

Route::get('/', 'ShowProfile@index');
Route::get('/index', 'ShowProfile@index');
Route::get('/about', 'ShowProfile@about');
Route::get('/article', 'ShowProfile@article');
Route::get('/share', 'ShowProfile@share');
//Route::get('/novel', 'ShowProfile@novel');
//表单
Route::any('/file', 'ShowProfile@fileUpload');

/*前台接口*/
Route::get('/api/getMenuData', 'WebApi@getMenuData'); //获取菜单信息
Route::get('/api/getArticleData', 'WebApi@getArticleData'); //获取文章数据
Route::get('/api/getShareData', 'WebApi@getShareData'); //获取分享数据
Route::get('/api/getAboutData', 'WebApi@getAboutData'); //获取关于数据