<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    protected $fillable = ['comment','post_id','task_id'];
    protected $quarded = [];
}
