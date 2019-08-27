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
    @extends('home/home')

    @section('main')
        <section class="my-section">
            <div></div>
            <div class="content-bar">
                <div>
                    <h3>文集</h3>
                </div>
                <div>
                    <h3>分享</h3>
                </div>
                <div>
                    <h3>关于</h3>
                </div>

            </div>
        </section>
    @endsection
</body>
</html>


