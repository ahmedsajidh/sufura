<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bayaan extends Model
{
    protected $fillable = [
        'author_id', 'title','file','image','status',
    ];
    public function  author()
    {
        return $this->belongsTo(User::class);
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
}
