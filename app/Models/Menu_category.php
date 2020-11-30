<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu_category extends Model
{
    //
    public function products()
    {
        return $this->hasMany(Products::class,'menu_category_id');
    }
}
