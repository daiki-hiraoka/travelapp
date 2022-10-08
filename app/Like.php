<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
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
}
