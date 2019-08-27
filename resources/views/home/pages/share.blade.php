<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css')}}/home.css">
    <link rel="stylesheet" href="{{asset('css')}}/share.css">
    <title>Document</title>
</head>
<body>

</body>
</html>
@extends('home/home')
@section('novel')
<div>
    <h2>生活分享</h2>
    <div class="share">

        <!-- 图片分享 -->
        @foreach($share as $item => $value )
        <div>
            <div>
                <img src="{{$value['image']}}" alt="">
            </div>
            <h5>{{$value['title']}}</h5>
        </div>
        @endforeach
    </div>
</div>

@endsection
