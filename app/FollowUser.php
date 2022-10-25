<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class FollowUser extends Model
{
    protected $fillable = ['following_user_id', 'followed_user_id'];
    
    protected $table = 'follow_users';
    
    public function user() {
        return $this->belongsTo('App\User');
    }
    
    // フォローされているか
    public function isFollowed($following_id, $followed_id) {
        return $this->where('following_user_id', $following_id)->where('followed_user_id', $followed_id)->exists();
    }
    
    // フォローされているか
    public function hasFollowed($following_id, $followed_id) {
        return $this->where('following_user_id', $followed_id)->where('followed_user_id', $followed_id)->get();
    }
    
    // 
    public function getFollowing($following_id) {
        return $this->where('following_user_id', $following_id)->get();
    }
    
    public function getFollowed($followed_id) {
        return $this->where('followed_user_id', $followed_id)->get();
    }
}
