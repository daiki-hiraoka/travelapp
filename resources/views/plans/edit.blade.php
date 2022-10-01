@extends('layouts.app')

@section('content')
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/plans/{{ $plan->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- formのmethodにはPUTがないのでこのように定義する -->
            @method('PUT')
            
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='plan[title]' value="{{ $plan->title }}">
            </div>
            
            <div class='content__place'>
                <h2>旅行先</h2>
                <input type='text' name='plan[place]' value="{{ $plan->place }}">
            </div>
            
            <div class='content__people'>
                <h2>人数</h2>
                <input type='text' name='plan[people]' value="{{ $plan->people }}">
            </div>
            
            <div class='content__spot'>
                <h2>おすすめスポット</h2>
                <input type='text' name='plan[spot]' value="{{ $plan->spot }}">
            </div>
            
            <div class='content__cost'>
                <h2>費用</h2>
                <input type='text' name='plan[cost]' value="{{ $plan->cost }}">
            </div>
            
            <div class='content__date'>
                <h2>日数</h2>
                <input type='text' name='plan[date]' value="{{ $plan->date }}">
            </div>
            
            <div class='content__move'>
                <h2>交通手段</h2>
                <input type='text' name='plan[move]' value="{{ $plan->move }}">
            </div>
            
            <div class="image">
                <h2>画像</h2>
                <input type="file" name='image' value="{{ $plan->image }}">
            </div>
            
            <input type="submit" value="保存">
        </form>
    </div>
@endsection