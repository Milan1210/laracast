<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taskset extends Model
{
    protected $fillable = ['title','task_id','coment_id',];

    public function coment()
    {
        return $this->hasOne(Comment::class);
    }
}
