@extends('layouts.app')

@section('content')

<div id="container">
	
		
		<div id="main">
				
				<section>
				
					<div class="plans">
						@foreach($plans as $plan)
							@if($plan->image)
								<div class="list">
									<a href="/plans/{{ $plan->id }}">
										<figure><img src="{{ $plan->image }}" alt="旅行写真"></figure>
										<span>{{ $plan->title }}</span>
									</a>
									投稿者：<a href="/users/{{ $plan->user->id }}">{{ $plan->user->name }}</a><br>
                
                                    <like-component :plan="{{ $plan }}"></like-component>
								</div>
							@endif
						@endforeach
					</div>	
					<!--<div class="list">-->
					<!--<a href="item.html">-->
					<!--<figure><img src="images/sample1_mini.jpg" alt="商品タイトル"></figure>-->
					<!--<span>商品タイトル</span>-->
					<!--</a>-->
					<!--</div>-->
				
					<!--<div class="list">-->
					<!--<a href="item.html">-->
					<!--<figure><img src="images/sample2_mini.jpg" alt="商品タイトル"></figure>-->
					<!--</a>-->
					<!--<span>商品タイトル</span>-->
					<!--</div>-->
				
					<!--<div class="list">-->
					<!--<a href="item.html">-->
					<!--<figure><img src="images/sample3_mini.jpg" alt="商品タイトル"></figure>-->
					<!--</a>-->
					<!--<span>商品タイトル</span>-->
					<!--</div>-->
				
					<!--<div class="list">-->
					<!--<a href="item.html">-->
					<!--<figure><img src="images/sample4_mini.jpg" alt="商品タイトル"></figure>-->
					<!--</a>-->
					<!--<span>商品タイトル</span>-->
					<!--</div>-->
				
					<!--<div class="list">-->
					<!--<figure><img src="images/sample5_mini.jpg" alt="商品タイトル"></figure>-->
					<!--<span>商品タイトル</span>-->
					<!--</div>-->
				
					<!--<div class="list">-->
					<!--<figure><img src="images/sample6_mini.jpg" alt="商品タイトル"></figure>-->
					<!--<span>商品タイトル</span>-->
					<!--</div>-->
				
					<!--<div class="list">-->
					<!--<figure><img src="images/sample7_mini.jpg" alt="商品タイトル"></figure>-->
					<!--<span>商品タイトル</span>-->
					<!--</div>-->
				
					<!--<div class="list">-->
					<!--<figure><img src="images/sample8_mini.jpg" alt="商品タイトル"></figure>-->
					<!--<span>商品タイトル</span>-->
					<!--</div>-->
					
				</section>
				
			</div>
			<!--/#main-->
			
			<div id="sub">
			
			<!--<h1 class="logo"><a href="index.html"><img src="images/logo.png" alt="SAMPLE SHOP"></a></h1>-->
			
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
			
			<!--<h1 class="logo"><a href="index.html"><img src="images/logo.png" alt="SAMPLE SHOP"></a></h1>-->
			
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


