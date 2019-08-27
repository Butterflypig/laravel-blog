<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css')}}/home.css">
    <link rel="stylesheet" href="{{asset('css')}}/article.css">
    <title>Document</title>
</head>
<body>

@extends('home/home')
@section('article')

<div class="article">
    @foreach($article as $item => $value )
        <article>

            <!-- 文章标题 -->
            <h3>
                {{$value->title}}
            </h3>

            <!-- 文章内容 -->
            <p>
                {{$value->content}}
            </p>

            <!-- 查看更多 -->
            <div class="more">
               <svg class="icon" aria-hidden="true">
                  <use xlink:href="#icon-arrow"></use>
                </svg>
            </div>

            <!-- 分割线 -->
            <div class="line"></div>

            <!-- 文章底部功能 -->
            <footer>
                <div>
                  <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-zhuanfa"></use>
                  </svg>
                </div>
                <div>
                  <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-xihuan"></use>
                  </svg>
                </div>
                <div>
                  <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-pinglun"></use>
                  </svg>
                </div>
            </footer>
        </article>
    @endforeach
    </div>

@endsection
</body>
</html>

