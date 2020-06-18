<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_form extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image_name',
        'show',
    ];
}
