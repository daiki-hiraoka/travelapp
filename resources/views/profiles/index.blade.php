@extends('layouts.app')

@section('content')

@if($user->image)
    <img class='image' src="{{ $user->image }}">
@endif
<p class='name'>名前：{{ $user->name }}</p>
@if($user->age)
    <p class='age'>年齢：{{ $user->age }}</p>
@endif
@if($user->sex)
    <p class='sex'>性別：{{ $user->sex }}</p>
@endif
@if($user->comment)
    <p class='comment'>自己紹介文：{{ $user->comment }}</p>
@endif

<p class="edit">[<a href="/profiles/{{ $user->id }}/edit">編集</a>]</p>
@endsection