@extends('layouts.app')

@section('content')
    <h1>旅行計画作成ページ</h1>
    <form action="/plans" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="title">
            <h2>タイトル</h2>
            <input type="text" name="plan[title]" placeholder="タイトル" value = "{{ old('plan.title') }}"/>
            <p class='title_errors' style='color:red'>{{ $errors->first('plan.title') }}</p>
        </div>

        <div class="place">
            <h2>旅行先</h2>
            <input type="text" name="plan[place]" placeholder="都道府県名"  value = "{{ old('plan.place') }}"/>
            <p class='place_errors' style='color:red'>{{ $errors->first('plan.place') }}</p>
        </div>
        
        <div class="people">
            <h2>人数</h2>
            <input type="text" name="plan[people]" placeholder="数字のみ入力"  value = "{{ old('plan.people') }}"/>
            <p class='people_errors' style='color:red'>{{ $errors->first('plan.people') }}</p>
        </div>
        
        <div class="spot">
            <h2>おすすめスポット</h2>
            <input type="text" name="plan[spot]" placeholder="スポット名"  value = "{{ old('plan.spot') }}"/>
            <p class='spot_errors' style='color:red'>{{ $errors->first('plan.spot') }}</p>
        </div>
        
        <div class="cost">
            <h2>費用</h2>
            <input type="text" name="plan[cost]" placeholder="数字のみ入力"  value = "{{ old('plan.cost') }}"/>
            <p class='cost_errors' style='color:red'>{{ $errors->first('plan.cost') }}</p>
        </div>
        
        <div class="date">
            <h2>日数</h2>
            <input type="text" name="plan[date]" placeholder="数字のみ入力"  value = "{{ old('plan.date') }}"/>
            <p class='date_errors' style='color:red'>{{ $errors->first('plan.date') }}</p>
        </div>
        
        <div class="move">
            <h2>交通手段</h2>
            <input type="text" name="plan[move]" placeholder="電車、車など"  value = "{{ old('plan.move') }}"/>
            <p class='move_errors' style='color:red'>{{ $errors->first('plan.move') }}</p>
        </div>
        
        <div class="image">
            <h2>画像</h2>
            <input type="file" name="image">
        </div>
        
        <!-- 経路検索機能 -->
        
        <button type="submit">保存</button>
    </form>
    
    <!--<ekispert-component></ekispert-component>-->
    <div class="back">[<a href="/">戻る</a>]</div> 
    <div id="map" style="height:500px">
    </div>
@endsection