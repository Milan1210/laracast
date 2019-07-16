<?php

namespace App;

class Comment extends Model
{
    protected $fillable = ['body','taskset_id'];
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    
}
