<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    public function getPaginateByLimit(int $limit_count = 2) {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
