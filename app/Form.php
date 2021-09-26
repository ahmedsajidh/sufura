<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
         'fullname','event_id','idcard','date','address','phone',
    ];

    public function Event()
    {
        return $this->belongsTo(Event::class);
    }
}
