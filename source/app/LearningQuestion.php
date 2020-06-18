<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearningQuestion extends Model
{
    protected $fillable = ['title', 'sub_title', 'description'];
}
