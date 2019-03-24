<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = ['title', 'subtitle','slug', 'top_description','bottom_description','image','showcase_images', 'git_link','live_link'];
    public $timestamps = true;
}
