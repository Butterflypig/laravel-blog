<?php

namespace App\Http\Controllers;

use DB; //连接数据库
use Illuminate\Http\Request;

//引入模型
use App\Models\Setting;

class ShowProfile extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    //获取数据
    public function getInitData() {
        $setting = Setting::query()->findOrFail(1)->toArray();
        return $setting;
    }

    //显示首页
    public function index() {
        $name = '李静';
        $menuList = [
            [
                'id' => 1,
                'name'=> '首页',
                'iconName' => '#icon-wxbzhuye',
                'routePath' => '/'
            ],
            [
                'id' => 2,
                'name'=> '文集',
                'iconName' => '#icon-wenzhang',
                'routePath' => '/article'
            ],
            [
                'id' => 3,
                'name'=> '分享',
                'iconName' => '#icon-zuopin',
                'routePath' => '/share'
            ],
            [
                'id' => 4,
                'name'=> '关于',
                'iconName' => '#icon-account',
                'routePath' => '/about'
            ],
        ];

        return view('home/pages/home',compact('menuList','name'));
    }

    //显示关于
    public function about() {
        $dataAbout = DB::select("select * from setting");
        $menuList = [
            [
                'id' => 1,
                'name'=> '首页',
                'iconName' => '#icon-wxbzhuye',
                'routePath' => '/'
            ],
            [
                'id' => 2,
                'name'=> '文集',
                'iconName' => '#icon-wenzhang',
                'routePath' => '/article'
            ],
            [
                'id' => 3,
                'name'=> '分享',
                'iconName' => '#icon-zuopin',
                'routePath' => '/share'
            ],
            [
                'id' => 4,
                'name'=> '关于',
                'iconName' => '#icon-account',
                'routePath' => '/about'
            ],
        ];
        return view('home/pages/about',compact('menuList','dataAbout'));
    }

}
