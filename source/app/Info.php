<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = ['title', 'sub_title', 'description'];
}
