<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
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
