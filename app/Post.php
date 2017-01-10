<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Post extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'post_discription', 'post_pictures','created_by'
    ];
    
}
