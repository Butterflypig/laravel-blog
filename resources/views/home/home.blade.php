<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    <link rel="stylesheet" href="/css/home.css">--}}
    <link rel="stylesheet" href="{{asset('css')}}/home.css">
    <title>首页</title>
</head>
<body>
    <div id="app">
        <div>
            <header></header>
            <section class="content">
                <aside>
                    <div class="blogAside">
                        <div class="info">
                            <div >
                                <img src="images/butterflypig.jpg" alt="">
                            </div>
                            <h4>Li Jing's blog</h4>
                        </div>
                        <menu class="menuList">
                            @foreach($menuList as $item => $value )
                                <div>
                                    <svg class="icon" aria-hidden="true">
                                        <use xlink:href="{{$value['iconName']}}"></use>
                                    </svg>
                                    <a href="javascript:void(0);">{{$value['name']}}</a>
                                </div>
                            @endforeach
                        </menu>
                    </div>
                </aside>
                <main>
                    @yield('main')
                    @yield('about')
                </main>
            </section>
        </div>
    </div>
<script src="//at.alicdn.com/t/font_1314068_evu4fexkl1m.js"></script>
</body>
</html>