@extends('layouts.app')

@section('content')

<div class="image">
    <h2>プロフィール画像</h2>
    <input type="file" name="image" value="{{ $user->image }}">
</div>

<div class='content__name'>
    <h2>名前</h2>
    <input type='text' name='user[name]' value="{{ $user->name }}">
</div>

<div class='content__age'>
    <h2>年齢</h2>
    <input type='text' name='user[age]' value="{{ $user->age }}">
</div>

<div class='content__comment'>
    <h2>自己紹介文</h2>
    <input type='text' name='user[comment]' value="{{ $user->comment}}">
</div>

@endsection