<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about_me';
    protected $fillable = ['title', 'subtitle','slug', 'description','image','showcase_images', 'resume'];
    public $timestamps = true;
}
