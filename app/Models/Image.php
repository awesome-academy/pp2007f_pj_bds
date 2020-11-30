<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    public function comments()
    {
        return $this->belongsTo(Products::class, 'products_id');
    }
}
