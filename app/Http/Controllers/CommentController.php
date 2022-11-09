<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Plan;
use Auth;

class CommentController extends Controller
{

    # コメントを保存
    public function store(Plan $plan, Request $request, Comment $comment) {
        \Log::debug($request);
        $input = [
            'text' => $request->comment,
            'user_id' => Auth::user()->id,
            'plan_id' => $plan->id,
            ];
        $comment->fill($input)->save();
    }

    
    # コメントを取得
    public function getComments(Plan $plan) {
        $comments = $plan->getComments($plan->id);
        return response()->json(['result' => $comments], 200);
    }
    
    # コメントを削除
    public function delete(Plan $plan, Comment $comment){
        \Log::debug($comment);
        $comment->delete();
    }
    
    # コメントを編集
    public function update(Plan $plan, Comment $comment, Request $request){
        \Log::debug($request);
        $input = [
            'text' => $request->comment,
            'user_id' => Auth::user()->id,
            'plan_id' => $plan->id,
            ];
        $comment->fill($input)->save();
    }
}
