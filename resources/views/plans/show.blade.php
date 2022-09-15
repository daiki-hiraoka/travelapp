<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="title">
            {{ $plan->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p class='place'>旅行先：{{ $plan->place}}</p>
                <p class='people'>人数：{{ $plan->people}}人</p>
                <p class='spot'>おすすめスポット：{{ $plan->spot}}</p>
                <p class='cost'>費用：{{ $plan->cost}}円</p>
                <p class='date'>日数：{{ $plan->date}}日</p>
                <p class='move'>交通手段：{{ $plan->move}}</p>
            </div>
        </div>
        <div class="back">
            <a href="/">戻る</a>
        </div>
    </body>
</html>