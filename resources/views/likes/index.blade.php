@extends('layouts.app')

@section('content')
    <h1>いいねした旅行計画一覧</h1>
    <p></p>
    <div class='plans'>
        @foreach($plans as $plan)
            <div class='plan'>
                <h2 class='title'>
                    <a href="/plans/{{ $plan->id }}">{{ $plan->title }}</a>
                </h2>
                <p class='place'>旅行先：{{ $plan->place }}</p>
                <p class='people'>人数：{{ $plan->people }}人</p>
                <p class='spot'>おすすめスポット：{{ $plan->spot }}</p>
                <p class='cost'>費用：{{ $plan->cost }}円</p>
                <p class='date'>日数：{{ $plan->date }}日</p>
                <p class='move'>移動手段：{{ $plan->move }}</p>
                @if($plan->image)
                    <img src="{{ $plan->image }}">
                    <p class='image'>{{ $plan->image }}</p>
                @endif
                投稿者：<a href="/users/{{ $plan->user->id }}">{{ $plan->user->name }}</a>
                <p></p>
            </div>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $plans->links() }}
    </div>
@endsection