<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\User;
use App\Plan;

class Like extends Model
{
    protected $fillable = ['user_id', 'plan_id'];
    
    public function user() {
        return $this->belongsTo('App\User');
    }
    
    public function plan() {
        return $this->belongsTo('App\Plan');
    }
    
    public function getByUserLike($user_id, int $limit_count = 2) {
        return $this
            ->plan()
            ->with('user')
            // ->with('likes')
            // ->where('user_id',$user_id)
            ->orderBy('updated_at', 'DESC')
            ->paginate($limit_count);
    }
}
