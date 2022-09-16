<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>plans</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <!--<script src="{{ asset('asset/js/delete.js') }}"></script>-->
    </head>
    <body>
        <h1 class="title">
            {{ $plan->title }}
        </h1>
        <div class="content">
            <div class="content__plan">
                <p class='place'>旅行先：{{ $plan->place }}</p>
                <p class='people'>人数：{{ $plan->people }}人</p>
                <p class='spot'>おすすめスポット：{{ $plan->spot }}</p>
                <p class='cost'>費用：{{ $plan->cost }}円</p>
                <p class='date'>日数：{{ $plan->date }}日</p>
                <p class='move'>交通手段：{{ $plan->move }}</p>
            </div>
        </div>
        <p class="edit">[<a href="/plans/{{ $plan->id }}/edit">編集</a>]</p>
        <form action="/plans/{{ $plan->id }}" id="form_{{ $plan->id }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="button" onclick="dialogDelete()">delete</button> 
        </form>
        <div class="back">
            <a href="/">戻る</a>
        </div>
        <script>
            function dialogDelete(){
                'use strict';
                const plan = @json($plan);
                if(window.confirm('削除したら復元出来ません。\n本当に削除しますか？')) {
                    document.getElementById('form_' + plan.id).submit();
                }
            }
        </script>
    </body>
</html>