<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Friend extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'friend_id','created_at'
    ];
    
}
