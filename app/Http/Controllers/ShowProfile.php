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
                'routePath' => 'http://www.blog.php/index'
            ],
            [
                'id' => 2,
                'name'=> '文集',
                'iconName' => '#icon-wenzhang',
                'routePath' => 'http://www.blog.php/article'
            ],
            [
                'id' => 3,
                'name'=> '分享',
                'iconName' => '#icon-zuopin',
                'routePath' => 'http://www.blog.php/share'
            ],
            [
                'id' => 4,
                'name'=> '关于',
                'iconName' => '#icon-account',
                'routePath' => 'http://www.blog.php/about'
            ],
            [
                'id' => 5,
                'name'=> '小说',
                'iconName' => '#icon-account',
                'routePath' => 'http://www.blog.php/novel'
            ]
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
                'routePath' => 'http://www.blog.php/index'
            ],
            [
                'id' => 2,
                'name'=> '文集',
                'iconName' => '#icon-wenzhang',
                'routePath' => 'http://www.blog.php/article'
            ],
            [
                'id' => 3,
                'name'=> '分享',
                'iconName' => '#icon-zuopin',
                'routePath' => 'http://www.blog.php/share'
            ],
            [
                'id' => 4,
                'name'=> '关于',
                'iconName' => '#icon-account',
                'routePath' => 'http://www.blog.php/about'
            ],
            [
                'id' => 5,
                'name'=> '小说',
                'iconName' => '#icon-account',
                'routePath' => 'http://www.blog.php/novel'
            ]
        ];
        return view('home/pages/about',compact('menuList','dataAbout'));
    }

    //显示文集
    public function article() {
        $article = DB::select("select * from article");
        $menuList = [
            [
                'id' => 1,
                'name'=> '首页',
                'iconName' => '#icon-wxbzhuye',
                'routePath' => 'http://www.blog.php/index'
            ],
            [
                'id' => 2,
                'name'=> '文集',
                'iconName' => '#icon-wenzhang',
                'routePath' => 'http://www.blog.php/article'
            ],
            [
                'id' => 3,
                'name'=> '分享',
                'iconName' => '#icon-zuopin',
                'routePath' => 'http://www.blog.php/share'
            ],
            [
                'id' => 4,
                'name'=> '关于',
                'iconName' => '#icon-account',
                'routePath' => 'http://www.blog.php/about'
            ],
            [
                'id' => 5,
                'name'=> '小说',
                'iconName' => '#icon-account',
                'routePath' => 'http://www.blog.php/novel'
            ]
        ];
        return view('home/pages/article',compact('menuList','article'));
    }

    //小说爬虫
    public function novel() {
        $menuList = [
            [
                'id' => 1,
                'name'=> '首页',
                'iconName' => '#icon-wxbzhuye',
                'routePath' => 'http://www.blog.php/index'
            ],
            [
                'id' => 2,
                'name'=> '文集',
                'iconName' => '#icon-wenzhang',
                'routePath' => 'http://www.blog.php/article'
            ],
            [
                'id' => 3,
                'name'=> '分享',
                'iconName' => '#icon-zuopin',
                'routePath' => 'http://www.blog.php/share'
            ],
            [
                'id' => 4,
                'name'=> '关于',
                'iconName' => '#icon-account',
                'routePath' => 'http://www.blog.php/about'
            ],
            [
                'id' => 5,
                'name'=> '小说',
                'iconName' => '#icon-account',
                'routePath' => 'http://www.blog.php/novel'
            ]
        ];
        return view('home/pages/novel',compact('menuList'));
    }

    //小说爬虫
    public function share() {
        $menuList = [
            [
                'id' => 1,
                'name'=> '首页',
                'iconName' => '#icon-wxbzhuye',
                'routePath' => 'http://www.blog.php/index'
            ],
            [
                'id' => 2,
                'name'=> '文集',
                'iconName' => '#icon-wenzhang',
                'routePath' => 'http://www.blog.php/article'
            ],
            [
                'id' => 3,
                'name'=> '分享',
                'iconName' => '#icon-zuopin',
                'routePath' => 'http://www.blog.php/share'
            ],
            [
                'id' => 4,
                'name'=> '关于',
                'iconName' => '#icon-account',
                'routePath' => 'http://www.blog.php/about'
            ],
            [
                'id' => 5,
                'name'=> '小说',
                'iconName' => '#icon-account',
                'routePath' => 'http://www.blog.php/novel'
            ]
        ];

        $share = [
            [
                'id' => '1',
                'title'=> '鬼刀漫画图-back2',
                'image'=> 'images/back2.jpg'
            ],
            [
                'id' => '2',
                'title'=> '鬼刀漫画图-cute',
                'image'=> 'images/cute.jpg'
            ],
            [
                'id' => '3',
                'title'=> '鬼刀漫画图-fly',
                'image'=> 'images/fly.jpg'
            ],
            [
                'id' => '4',
                'title'=> '鬼刀漫画图-lay',
                'image'=> 'images/lay.png'
            ],
            [
                'id' => '5',
                'title'=> '鬼刀漫画图-look',
                'image'=> 'images/look.jpg'
            ],
            [
                'id' => '6',
                'title'=> '鬼刀漫画图-shy2',
                'image'=> 'images/shy2.jpg'
            ],
            [
                'id' => '7',
                'title'=> '鬼刀漫画图-sleep',
                'image'=> 'images/sleep.jpg'
            ]
        ];
        return view('home/pages/share',compact('menuList','share'));
    }
}
