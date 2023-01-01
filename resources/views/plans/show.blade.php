@extends('layouts.app')

@section('content')
    <div id="container">
        
        <div id="main">
            
            <article>
            
            <h2>{{ $plan->title }}</h2>
            
            <figure class="mb30 c">
                <img src="{{ $plan->image }}" alt="写真の説明を入れます">
            </figure>
            
            <table class="ta1">
                
            <caption>旅行詳細</caption>
            
            <tr>
                <th>旅行先</th>
                <td>{{ $plan->place }}</td>
            </tr>
            
            <tr>
                <th>人数</th>
                <td>{{ $plan->people }}人</td>
            </tr>
            
            <tr>
                <th>おすすめスポット</th>
                <td>{{ $plan->spot }}</td>
            </tr>
            
            <tr>
                <th>費用</th>
                <td>{{ $plan->cost }}円</td>
            </tr>
            
            <tr>
                <th>日数</th>
                <td>{{ $plan->date }}日</td>
            </tr>
            
            </table>
            
            </article>
            
            <p class="edit">[<a href="/plans/{{ $plan->id }}/edit">編集</a>]</p>
            
            <p><a href="javascript:history.back()">&lt;&lt; 前のページに戻る</a></p>
            
            </div>
            <!--/#main-->
            
            <div id="sub">
            
            
            <!--PC用（801px以上端末）メニュー-->
            <nav id="menubar">
            <ul>
            <li class="menu1 current"><a href="/">ホーム</a></li>
	        <li class="menu3"><a href="/plans/create">旅行計画作成</a></li>
	        <li class="menu4"><a href="/users/{{ Auth::user()->id }}/likes">いいねした投稿</a></li>
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
	        <li class="menu4"><a href="/users/{{ Auth::user()->id }}/likes">いいねした投稿</a></li>
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