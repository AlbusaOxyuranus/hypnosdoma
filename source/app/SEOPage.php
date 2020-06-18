<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SEOPage extends Model
{
    protected $fillable = ['page_url', 'page_title', 'page_title_length', 'page_description', 'page_description_length', 'page_h1', 'page_h1_length'];
}
