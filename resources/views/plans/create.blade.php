@extends('layouts.app')

@section('content')
    <div id="container">
        
        <div id="main">
            
            <article>
            <form action="/plans" method="POST" enctype="multipart/form-data">
                @csrf
                
                <table class="ta1">
                <caption>旅行詳細</caption>
                
                <tr>
                    <th>タイトル</th>
                    <td>
                        <input type="text" name="plan[title]" placeholder="タイトル名"  value = "{{ old('plan.title') }}"/>
                        <p class='place_errors' style='color:red'>{{ $errors->first('plan.title') }}</p>
                    </td>
                </tr>
                
                <!--旅行先変更-->
                <tr>
                    <th>旅行先</th>
                    <td>
                        <input type="text" name="plan[place]" placeholder="都道府県名"  value = "{{ old('plan.place') }}"/>
                        <p class='place_errors' style='color:red'>{{ $errors->first('plan.place') }}</p>
                    </td>
                </tr>
                
                <!--人数変更-->
                <tr>
                    <th>人数</th>
                    <td>
                        <input type="text" name="plan[people]" placeholder="数字のみ入力"  value = "{{ old('plan.people') }}"/>
                        <p class='people_errors' style='color:red'>{{ $errors->first('plan.people') }}</p>
                    </td>
                </tr>
                <!--おすすめスポット変更-->
                <tr>
                    <th>おすすめスポット</th>
                    <td>
                        <input type="text" name="plan[spot]" placeholder="スポット名"  value = "{{ old('plan.spot') }}"/>
                        <p class='spot_errors' style='color:red'>{{ $errors->first('plan.spot') }}</p>
                    </td>
                </tr>
                <!--費用変更-->
                <tr>
                    <th>費用</th>
                    <td>
                        <input type="text" name="plan[cost]" placeholder="数字のみ入力"  value = "{{ old('plan.cost') }}"/>
                        <p class='cost_errors' style='color:red'>{{ $errors->first('plan.cost') }}</p>
                    </td>
                </tr>
                <!--日数変更-->
                <tr>
                    <th>日数</th>
                    <td>
                        <input type="text" name="plan[date]" placeholder="数字のみ入力"  value = "{{ old('plan.date') }}"/>
                        <p class='date_errors' style='color:red'>{{ $errors->first('plan.date') }}</p>
                    </td>
                </tr>
                <!--交通手段変更-->
                <tr>
                    <th>交通手段</th>
                    <td>
                        <input type="text" name="plan[move]" placeholder="電車、車など"  value = "{{ old('plan.move') }}"/>
                        <p class='move_errors' style='color:red'>{{ $errors->first('plan.move') }}</p>
                    </td>
                </tr>
                
                <tr>
                    <th>image</th>
                    <td>
                        <input type="file" name="image">
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