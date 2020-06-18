<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advantage extends Model
{
    protected $fillable = ['title', 'description', 'image_name', 'show'];

    /*public function hide()
    {
        $this->show = 0;
    }*/
}
