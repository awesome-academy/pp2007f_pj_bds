<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //
    protected $fillable = [
        'name',
        'slug',
        'type',
        'name_with_code',
        'code',
    ];

    public function product()
    {
        return $this->hasMany(Products::class, 'provinces_id');
    }


    public function districts()
    {
        return $this->hasMany(District::class, 'parent_code');
    }
}
