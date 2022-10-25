<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Auth;
use App\User;
use App\FollowUser;

class ProfileController extends Controller
{
    function index(User $user, FollowUser $follow_user) {
        $following_count = $follow_user->getFollowing(Auth::id())->count();
        $followed_count = $follow_user->getFollowed(Auth::id())->count();
        // dd($following_count->count());
        // dd(User::follows());
        return view('profiles/index')->with([
            'user' => $user,
            'following_count' => $following_count,
            'followed_count' => $followed_count,
            ]);    
    }
    
    function edit(User $user) {
        return view('profiles/edit')->with(['user' => $user]);
    }
    
    function update(Request $request, User $user) {
        $input = $request['user'];
        // 画像が保存された時
        if($request->file('image')){
            $image = $request->file('image');
        
            // S3に画像を保存
            $path = Storage::disk('s3')->putFile('/', $image, 'public');
            $input += ['image' => Storage::disk('s3')->url($path)];
        }
        
        $user->fill($input)->save();
        return redirect('/profiles/'.$user->id);
    }
}