<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'status','post_id','username','comment',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
