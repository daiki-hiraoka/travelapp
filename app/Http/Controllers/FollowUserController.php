<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class FollowUserController extends Controller
{
    public function store(User $user)
    {
        $user_auth = Auth::user();
        
        if($user->isFollowed(Auth::id())) {
            $destroy_record = $user->getFollowed($user_auth->id);
            \Log::debug($destroy_record);
            FollowUser::destroy($destroy_record[0]->id);
        } else {
            $follow_user = FollowUser::firstOrCreate(
                array(
                    'followed_user_id' => $user_auth->id,
                    'following_user_id' => Auth::user()->id
                    )
            );
        }
    }
    
    public function check(User $user)
    {
        $check = $user->isFollowed(Auth::id());
        return response()->json(['result' => $check], 200);
    }
}
