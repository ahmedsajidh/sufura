<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Post extends Model
{
    use Rateable;

    protected $fillable = [
        'user_id', 'title','body','image','category_id','status','ingredients',
    ];
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function  user()
    {
        return $this->belongsTo(User::class);
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
    public function Comment()
    {
        return $this->hasMany(Comment::class);
    }
    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }


}
