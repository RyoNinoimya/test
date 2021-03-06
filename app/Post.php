<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable = [
    'title',
    'body',
    ];
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this->orderBy('id', 'DESC')->paginate($limit_count);
    }
}
