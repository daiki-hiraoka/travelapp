@extends('layouts.app')

@section('content')
    <div id="container">
        
        <div id="main">
            
            <article>
            
            <h2>{{ $user->name }}</h2>
            
            <figure class="mb30 c">
                @if($user->image)
                <img src="{{ $user->image }}" alt="写真の説明を入れます">
                @endif
            </figure>
            
            <table class="ta1">
            <caption>プロフィール</caption>
            <th>名前</th>
            <td>{{ $user->name }}</td>
            </tr>
            @if($user->age)
            <tr>
            <th>年齢</th>
            <td>{{ $user->age }}</td>
            </tr>
            <tr>
            @endif
            @if($user->sex)
            <tr>
            <th>性別</th>
            <td>{{ $user->sex }}</td>
            </tr>
            @endif
            @if($user->comment)
            <tr>
            <th>自己紹介文</th>
            <td>{{ $user->comment }}</td>
            </tr>
            @endif
            <tr>
            <th>フォロー数</th>
            <td>{{ $following_count }}人</td>
            </tr>
            <tr>
            <th>フォロワー数</th>
            <td>{{ $followed_count }}人</td>
            </tr>
            </table>
            
            <p class="edit">[<a href="/profiles/{{ $user->id }}/edit">編集</a>]</p>
            </article>
            
            <follow-component :user_id="{{ $user->id }}"></follow-component>
            
            <button  href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            
            <p><a href="javascript:history.back()">&lt;&lt; 前のページに戻る</a></p>
            
            </div>
            <!--/#main-->
            
            <div id="sub">
            
            
            <!--PC用（801px以上端末）メニュー-->
            <nav id="menubar">
            <ul>
            <li class="menu1 current"><a href="/">ホーム</a></li>
	        <li class="menu3"><a href="/plans/create">旅行計画作成</a></li>
	        <li class="menu4"><a href="/plans/{{ Auth::user()->id }}/likes">いいねした投稿</a></li>
	        <li class="menu5"><a href="/profiles/{{ Auth::user()->id }}">プロフィール</a></li>
            </ul>
            </nav>
            
            </div>
            <!--/#sub-->
            
            <!--小さな端末用（800px以下端末）環境でのみ表示させるブロック-->
            
            <div id="sh-sub">
            
            
            
            <!--小さな端末用（800px以下端末）メニュー-->
            <nav id="menubar-s">
            <ul>
            <li class="menu1 current"><a href="/">ホーム</a></li>
	        <li class="menu3"><a href="/plans/create">旅行計画作成</a></li>
	        <li class="menu4"><a href="/plans/{{ Auth::user()->id }}/likes">いいねした投稿</a></li>
	        <li class="menu5"><a href="/profiles/{{ Auth::user()->id }}">プロフィール</a></li>
            </ul>
            </nav>
            
        </div>
        <!--/#sh-sub-->
    
    </div>
<!--/#container-->

<!--ページの上部に戻る「↑」ボタン-->
<p class="nav-fix-pos-pagetop"><a href="#">↑</a></p>

<!--メニュー開閉ボタン-->
<div id="menubar_hdr" class="close"></div>

@endsection
