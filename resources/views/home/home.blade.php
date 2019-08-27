
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
                            <a href="{{$value['routePath']}}">
                                <svg class="icon" aria-hidden="true">
                                    <use xlink:href="{{$value['iconName']}}"></use>
                                </svg>
                                <span>{{$value['name']}}</span>
                            </a>
                        @endforeach
                    </menu>
                </div>
            </aside>
            <main>
                @yield('main')
                @yield('about')
                @yield('article')
                @yield('share')
                @yield('novel')
            </main>
        </section>
    </div>
</div>
<script src="//at.alicdn.com/t/font_1314068_evu4fexkl1m.js"></script>


