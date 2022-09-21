<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>plans</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <!-- script -->
        <script src="{{ asset('js/delete.js') }}"></script>
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        旅行計画アプリ
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
    
                        </ul>
    
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item">旅行計画作成</a>
                                        <a class="dropdown-item">旅行計画一覧</a>
                                        <a class="dropdown-item">いいねした投稿</a>
                                        <a class="dropdown-item">友達</a>
                                        <a class="dropdown-item">プロフィール</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
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
                <small>{{ $plan->user->name }}</small>
            </div>
        </div>
        
        <p class="edit">[<a href="/plans/{{ $plan->id }}/edit">編集</a>]</p>
        
        <form action="/plans/{{ $plan->id }}" id="form_delete" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="button" onclick="dialogDelete()">delete</button> 
        </form>
        
        <div class="back">
            <a href="/">戻る</a>
        </div>
        
    </body>
</html>