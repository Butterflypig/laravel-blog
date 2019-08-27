<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css')}}/home.css">
    <title>Document</title>
</head>
<body>
    <?php
    include ("lib/phpQuery.php");
    $link = "https://www.biquge.com.cn/book/23488/";
    $contentLink = "https://www.biquge.com.cn/book/23488/11089294.html";
    phpQuery::newDocumentFile($contentLink);
    $title = pq("#content")->html();
    ?>
    @extends('home/home')

    @section('novel')

    <h1>小说爬虫</h1>
    <h3>以圣墟为例</h3>

    <p class="novel-content">
        {{!!$title!!}}
    </p>
    @endsection
</body>
</html>


