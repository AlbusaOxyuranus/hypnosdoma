<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = ['name', 'description', 'content', 'price', 'currency', 'popular', 'show'];
}
