<?php

namespace App\Http\Controllers;

//引入模型
use App\Models\Article;
use App\Models\PersonalInformation;


use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

class WebApi extends Controller
{

    //获取菜单数据
    public function getMenuData()
    {
        $article = Article::all();
        return $article;
    }

    //获取文集数据
    public function getArticleData()
    {
        $article = Article::query()->where('type', 'article')->get();
        return $article;
    }

    //获取分享数据
    public function getShareData()
    {
        $Share = Article::query()->where('type', 'share')->get();
        return $Share;
    }

    //获取关于数据
    public function getAboutData()
    {
        $setting = PersonalInformation::query()->findOrFail(1)->toArray();
        return $setting;
    }

    public function getLoginData()
    {
        $setting = PersonalInformation::query()->findOrFail(1)->toArray();
        return $setting;
    }

}
