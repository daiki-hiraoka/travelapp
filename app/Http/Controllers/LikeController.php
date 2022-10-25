<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Plan;
use App\User;
use App\Like;

class LikeController extends Controller
{
    public function index(User $user) {
        $user_id = $user->id;
        return view('likes/index')->with(['plans' => $user->getByUserLike($user_id)]);
    }
    
    public function store(Plan $plan)
    {
               
        $user = Auth::user();

       
            if($plan->isLiked(Auth::id())) {
                // 対象のレコードを取得して、削除する。
                $delete_record = $plan->getLiked($user->id);
                 \Log::debug($delete_record);
                Like::destroy($delete_record[0]->id);
            } else {
                $like = Like::firstOrCreate(
                    array(
                        'user_id' => Auth::user()->id,
                        'plan_id' => $plan->id
                    )
                );
           }
       
    }
    
    public function destroy($planId) {
        Auth::user()->unlike($planId);
        return 'ok!';
    }
    
    public function check(Plan $plan) {
        $count = $plan->isLiked(Auth::id());
        return response()->json(['result' => $count], 200);
    }
    
    public function counts(Plan $plan) {
        $count = $plan->likes()->count();
        return response()->json(['result' => $count], 200);
    }
}
