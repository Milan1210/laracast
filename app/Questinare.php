<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questinare extends Model
{
    protected $fillable = [
        'title',
        'content',
    ];
}
