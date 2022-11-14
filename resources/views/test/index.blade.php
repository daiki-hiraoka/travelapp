@extends('layouts.app')

@section('content')

<!--<div class="home">-->
        
    <div id="container">
        
        <div id="main">
            
            <section id="mainimg">
            
                <h2 class="dn">お知らせ</h2>
                
                <a href="#"><div class="slide1"><p>2021/11/12…vivus.jsとjquery.inview.jsファイルをCDNからの読み込みに変更。<span class="newicon">NEW</span></p></div></a>
                <a href="#"><div class="slide2"><p>2020/02/07…Shoppingページにパララックス効果を取り入れました。</p></div></a>
                <a href="#"><div class="slide3"><p>2019/01/31…ショップ向け無料ホームページテンプレート tp_shop10公開。</p></div></a>
            
            </section>
        
        </div>
        <!--/#main-->
        
        <div id="sub">
            
            <!--<h1 class="logo"><a href="index.html"><img src="{{ asset('images/logo.png') }}" alt="SAMPLE SHOP"></a></h1>-->
            
            <!--PC用（801px以上端末）メニュー-->
            <nav id="menubar">
                <ul>
                    <li class="menu1 current"><a href="index.html">ホーム</a></li>
                    <li class="menu2"><a href="about.html">旅行計画一覧</a></li>
                    <li class="menu3"><a href="about.html">旅行計画作成</a></li>
                    <li class="menu4"><a href="list.html">いいねした投稿</a></li>
                    <li class="menu5"><a href="access.html">プロフィール</a></li>
                </ul>
            </nav>
            
            </div>
            <!--/#sub-->
            
            <!--小さな端末用（800px以下端末）環境でのみ表示させるブロック-->
            
            <div id="sh-sub">
            
            <!--<h1 class="logo"><a href="index.html"><img src="{{ asset('images/logo.png') }}" alt="SAMPLE SHOP"></a></h1>-->
            
            <!--小さな端末用（800px以下端末）メニュー-->
            <nav id="menubar-s">
                <ul>
                    <li class="menu1 current"><a href="index.html">ホーム</a></li>
                    <li class="menu2"><a href="about.html">旅行計画一覧</a></li>
                    <li class="menu3"><a href="about.html">旅行計画作成</a></li>
                    <li class="menu4"><a href="list.html">いいねした投稿</a></li>
                    <li class="menu5"><a href="access.html">プロフィール</a></li>
                </ul>
            </nav>
            
            </div>
            <!--/#sh-sub-->
            
            <footer>
                <small>Copyright&copy; <a href="index.html">SAMPLE SHOP</a> All Rights Reserved.</small>
                <span class="pr"><a href="http://template-party.com/" target="_blank">《Web Design:Template-Party》</a></span>
            </footer>
            
        </div>
        <!--/#container-->
        
        <!--ページの上部に戻る「↑」ボタン-->
        <p class="nav-fix-pos-pagetop"><a href="#">↑</a></p>
        
    <!--メニュー開閉ボタン-->
    <div id="menubar_hdr" class="close"></div>
<!--</div>-->
@endsection