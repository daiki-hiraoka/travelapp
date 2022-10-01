@extends('layouts.app')

@section('content')
<div class="content">
    <form action="/profiles/{{ $user->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- formのmethodにはPUTがないのでこのように定義する -->
        @method('PUT')
        
        <div class="image">
            <h2>プロフィール画像</h2>
            <img src="{{ $user->image }}">
            <input type="file" name="image" value="{{ $user->image }}">
        </div>
        
        <div class='content__name'>
            <h2>名前</h2>
            <input type='text' name='user[name]' value="{{ $user->name }}">
        </div>

        <div class='content__sex'>
            <h2>性別</h2>
            <select>
                <option value="">性別を選択</option>
                <option value="man" @if( old('user[sex]') === 'man' ) selected @endif>男</option>
                <option value="woman" @if( old('user[sex]') === 'woman' ) selected @endif>女</option>
            </select>
        </div>        
        <div class='content__age'>
            <h2>年齢</h2>
            <input type='text' name='user[age]' value="{{ $user->age }}">
        </div>
        
        <div class='email__comment'>
            <h2>メールアドレス</h2>
            <input type='text' name='user[email]' value="{{ $user->email }}">
        </div>
        
        <div class='content__password'>
            <h2>パスワード</h2>
            <input type='text' name='user[password]' value="{{ $user->password }}">
        </div>
        
        <div class="conntent__comment">
            <h2>自己紹介文</h2>
            <textarea name="user[comment]" placeholder="自己紹介文">{{ $user->comment}}</textarea>
        </div>
        
        <input type="submit" value="保存">
    </form>
</div>

@endsection