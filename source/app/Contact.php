<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['title', 'img', 'image_for_footer', 'content'];
}
