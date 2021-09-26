<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = [
        'name', 'qty', 'post_id'
    ];

    public function posts()
    {
        return $this->belongsTo(Post::class);
    }
}
