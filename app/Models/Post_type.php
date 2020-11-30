<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post_type extends Model
{
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function product()
    {
        return $this->hasMany(Products::class,'post_type_id');
    }
}
