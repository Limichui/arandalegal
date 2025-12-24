<?php

namespace App\Models\web;

use Illuminate\Database\Eloquent\Model;

class FooterTitle extends Model
{
    protected $fillable = ['title', 'locale', 'order']; 

    public function items() 
    { 
        return $this->hasMany(FooterSecondaryTitle::class); 
    }
}
