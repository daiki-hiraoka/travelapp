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
    ];
    
    // 複数のplanとuserのリレーション
    public function user() {
        return $this->belongsTo('App\User');
    }
    
    public function getPaginateByLimit(int $limit_count = 2) {
        return $this::with('user')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
