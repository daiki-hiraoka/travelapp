@extends('layouts.app')

@section('content')
<h1 class="title">
    {{ $plan->title }}
</h1>
<div class="content">
    <div class="content__plan">
        <p class='place'>旅行先：{{ $plan->place }}</p>
        <p class='people'>人数：{{ $plan->people }}人</p>
        <p class='spot'>おすすめスポット：{{ $plan->spot }}</p>
        <p class='cost'>費用：{{ $plan->cost }}円</p>
        <p class='date'>日数：{{ $plan->date }}日</p>
        <p class='move'>交通手段：{{ $plan->move }}</p>
        <small>{{ $plan->user->name }}</small>
    </div>
</div>

<comment-component :plan_id="{{ $plan->id }}"></comment-component>

<p class="edit">[<a href="/plans/{{ $plan->id }}/edit">編集</a>]</p>

<form action="/plans/{{ $plan->id }}" id="form_delete" method="POST" style="display:inline">
    @csrf
    @method('DELETE')
    <button type="button" onclick="dialogDelete()">delete</button> 
</form>

<div class="back">
    <a href="/">戻る</a>
</div>
@endsection