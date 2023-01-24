@extends('layouts.app')

@section('content')
    <div id="container">
        
        <div id="main">
            
            <article>
            <form action="/plans/{{ $plan->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <h3>タイトル</h3>
                <input type='text' name='plan[title]' value="{{ $plan->title }}">
                
                <figure class="mb30 c">
                    <input type="file" name="image">
                </figure>
                
                <table class="ta1">
                <caption>旅行詳細</caption>
                <!--旅行先変更-->
                <tr>
                    <th>旅行先</th>
                    <td>
                        <input type='text' name='plan[place]' value="{{ $plan->place }}">
                    </td>
                </tr>
                <!--人数変更-->
                <tr>
                    <th>人数</th>
                    <td>
                        <input type='text' name='plan[people]' value="{{ $plan->people }}">
                    </td>
                </tr>
                <!--おすすめスポット変更-->
                <tr>
                    <th>おすすめスポット</th>
                    <td>
                        <input type='text' name='plan[spot]' value="{{ $plan->spot }}">
                    </td>
                </tr>
                <!--費用変更-->
                <tr>
                    <th>費用</th>
                    <td>
                        <input type='text' name='plan[cost]' value="{{ $plan->cost }}">
                    </td>
                </tr>
                <!--日数変更-->
                <tr>
                    <th>日数</th>
                    <td>
                        <input type='text' name='plan[date]' value="{{ $plan->date }}">
                    </td>
                </tr>
                <!--交通手段変更-->
                <tr>
                    <th>交通手段</th>
                    <td>
                        <input type='text' name='plan[move]' value="{{ $plan->move }}">
                    </td>
                </tr>
                </table>
                
                <button type="submit">保存</button>
            </form>
            </article>
            
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