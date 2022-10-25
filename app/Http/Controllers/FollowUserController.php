<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\FollowUser;
use Illuminate\Http\Request;

class FollowUserController extends Controller
{
    public function follow(User $user, FollowUser $follow_user)
    {
        // $user_auth = Auth::user();
        \Log::debug($follow_user->isFollowed(Auth::id(), $user->id));
        if($follow_user->isFollowed(Auth::id(), $user->id)) {
            # ここにミスの可能性がある
            $destroy_record = $follow_user->hasFollowed(Auth::id(), $user->id);
            \Log::debug($destroy_record[0]);
            FollowUser::destroy($destroy_record[0]->id);
        } else {
            // \Log::debug('a');
            $follow_user = FollowUser::firstOrCreate(
                array(
                    'followed_user_id' => $user->id,
                    'following_user_id' => Auth::user()->id
                    )
            );
            // \Log::debug($follow_user);
        }
    }
    
    public function check(User $user, FollowUser $follow_user)
    {
        $check = $follow_user->isFollowed(Auth::id(),$user->id);
        // \Log::debug($check);
        return response()->json(['result' => $check], 200);
    }
}