<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Like extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'post_id', 'user_id'
    ];
    
}
