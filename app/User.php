<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Plan;
use App\Like;
use App\FollowUser;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'age',
        'sex',
        'comment',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    // user1人が複数のplanを持っている
    public function plans() {
        return $this->hasMany('App\Plan');
    }
    
    public function getByUser(int $limit_count = 2) {
        return $this->plans()->with('user')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function getByUserLike($user_id, int $limit_count = 2) {
        return $this
            ->likes()
            ->orderBy('updated_at', 'DESC')
            ->paginate($limit_count);
    }
    
    // いいねとの多対多のリレーション
    public function likes() {
        return $this->belongsToMany('App\Plan', 'likes', 'user_id', 'plan_id')->withTimestamps();
    }
    
    // ユーザとの多対多のリレーション
    public function follows() {
        return $this->belongsToMany('App\User', 'follow_users', 'following_user_id','followed_user_id');
    }
    
    // ユーザとの多対多のリレーション
    public function followers() {
        return $this->belongsToMany('App\User', 'follow_users', 'followed_user_id','following_user_id');
    }
}
