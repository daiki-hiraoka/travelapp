<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class Plan extends Model
{
    use SoftDeletes;
    
    protected $fillable =[
        'title',
        'place',
        'people',
        'spot',
        'cost',
        'date',
        'move',
        'user_id',
        'image',
    ];
    
    // 複数のplanとuserのリレーション
    public function user() {
        return $this->belongsTo('App\User');
    }
    
    public function likes() {
        return $this->hasMany('App\Like');
    }
    
    public function getPaginateByLimit(int $limit_count = 2) {
        return $this::with('user')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    // 検索機能
    public function getSearch($search) {
        return $this::with('user')->orderBy('updated_at', 'DESC')
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('place', 'LIKE', "%{$search}%")
            ->orWhere('spot', 'LIKE', "%{$search}%")
            ->paginate(2);
    }

    public function isLiked($user_id) {
        return $this->likes()->where('user_id', $user_id)->exists();
    }
    
    public function getLiked($user_id) {
        return $this->likes()->where('user_id', $user_id)->get();
    }
}
