<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'author_id', 'title','secondtitle','image','status',
    ];
    public function  author()
    {
        return $this->belongsTo(User::class);
    }
}
