<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\FollowUser;
use Illuminate\Http\Request;

class FollowUserController extends Controller
{
    public function store(User $user)
    {
        // $user_auth = Auth::user();
        
        if($user->isFollowed(Auth::id())) {
            # ここにミスの可能性がある
            $destroy_record = $user->getFollowed($user->id);
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
    
    public function check(User $user)
    {
        $check = $user->isFollowed($user->id);
        // \Log::debug($check);
        return response()->json(['result' => $check], 200);
    }
}
