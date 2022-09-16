<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
    
    public function getPaginateByLimit(int $limit_count = 2) {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
