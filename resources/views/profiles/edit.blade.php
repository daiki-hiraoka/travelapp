@extends('layouts.app')

@section('content')
    <div id="container">
        
        <div id="main">
            <form action="/profiles/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- formのmethodにはPUTがないのでこのように定義する -->
                @method('PUT')
                
                <article>
                
                <h2>{{ $user->name }}</h2>
                
                <figure class="mb30 c">
                    <div class="image">
                        プロフィール画像<br>
                        <img src="{{ $user->image }}">
                        <input type="file" name="image" value="{{ $user->image }}">
                    </div>
                </figure>
                
                <table class="ta1">
                <caption>プロフィール</caption>
                
                <th>名前</th>
                <td>
                    <input type='text' name='user[name]' value="{{ $user->name }}">
                </td>
                </tr>
                
                <tr>
                <th>性別</th>
                <td>
                    <select name='user[sex]'>
                        <option value="">性別を選択</option>
                        <option value="man" @if( old('user[sex]') === 'man' ) selected @endif>男</option>
                        <option value="woman" @if( old('user[sex]') === 'woman' ) selected @endif>女</option>
                    </select>
                </td>
                </tr>
                
                <tr>
                    <th>年齢</th>
                    <td>
                        <input type='text' name='user[age]' value="{{ $user->age }}">
                    </td>
                </tr>
                
                <tr>
                    <th>メールアドレス</th>
                    <td>
                        <input type='text' name='user[email]' value="{{ $user->email }}">
                    </td>
                </tr>
                
                <tr>
                    <th>パスワード</th>
                    <td>
                        <input type='text' name='user[password]' value="{{ $user->password }}">
                    </td>
                </tr>
                
                <tr>
                    <th>自己紹介文</th>
                    <td>
                        <textarea name="user[comment]" placeholder="自己紹介文">{{ $user->comment}}</textarea>
                    </td>
                </tr>
                </table>
                
            </article>
            <input type="submit" value="保存">
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
