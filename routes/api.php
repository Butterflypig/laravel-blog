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

//前台数据接口
//Route::get('/api/getMenuData', 'WebApi@getMenuData'); //获取菜单信息
//Route::get('/api/getArticleData', 'WebApi@getArticleData'); //获取文章数据
//Route::get('/api/getShareData', 'WebApi@getShareData'); //获取分享数据
//Route::get('/api/getAboutData', 'WebApi@getAboutData'); //获取关于数据
