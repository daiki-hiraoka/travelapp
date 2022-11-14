@extends('layouts.app')

@section('content')
    <div id="container">
        
        <div id="main">
            
            <article>
            
            <h2>Shopping<span>ショッピング</span></h2>
            
            <figure class="mb30 c">
                <img src="images/sample1.jpg" alt="写真の説明を入れます">
            </figure>
            
            <table class="ta1">
            <caption>見出しが必要であればここを使います</caption>
            <tr>
            <th>サンプル見出し</th>
            <td>サンプルテキスト。</td>
            </tr>
            <tr>
            <th>サンプル見出し</th>
            <td>サンプルテキスト。</td>
            </tr>
            <tr>
            <th>サンプル見出し</th>
            <td>サンプルテキスト。</td>
            </tr>
            <tr>
            <th>サンプル見出し</th>
            <td>サンプルテキスト。</td>
            </tr>
            <tr>
            <th>サンプル見出し</th>
            <td>サンプルテキスト。</td>
            </tr>
            </table>
            
            <p class="c">
            <input type="submit" value="カゴにいれる" class="cart-btn">
            <br>※カート機能は<a href="https://template-party.com/shop_program/">ショップCMS</a>に備わった機能です。
            </p>
            
            </article>
            
            <p><a href="javascript:history.back()">&lt;&lt; 前のページに戻る</a></p>
            
            </div>
            <!--/#main-->
            
            <div id="sub">
            
            <h1 class="logo"><a href="index.html"><img src="images/logo.png" alt="SAMPLE SHOP"></a></h1>
            
            <!--PC用（801px以上端末）メニュー-->
            <nav id="menubar">
            <ul>
            <li class="menu1"><a href="index.html">Home<span>ホーム</span></a></li>
            <li class="menu2"><a href="about.html">About<span>当サイトについて</span></a></li>
            <li class="menu3"><a href="list.html">Shopping<span>ショッピング</span></a></li>
            <li class="menu4"><a href="access.html">Access<span>アクセス</span></a></li>
            <li class="menu5"><a href="contact.html">Contact<span>お問い合わせ</span></a></li>
            </ul>
            </nav>
            
            </div>
            <!--/#sub-->
            
            <!--小さな端末用（800px以下端末）環境でのみ表示させるブロック-->
            
            <div id="sh-sub">
            
            <h1 class="logo"><a href="index.html"><img src="images/logo.png" alt="SAMPLE SHOP"></a></h1>
            
            <!--小さな端末用（800px以下端末）メニュー-->
            <nav id="menubar-s">
            <ul>
            <li class="menu1"><a href="index.html">Home<span>ホーム</span></a></li>
            <li class="menu2"><a href="about.html">About<span>当サイトについて</span></a></li>
            <li class="menu3"><a href="list.html">Shopping<span>ショッピング</span></a></li>
            <li class="menu4"><a href="access.html">Access<span>アクセス</span></a></li>
            <li class="menu5"><a href="contact.html">Contact<span>お問い合わせ</span></a></li>
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