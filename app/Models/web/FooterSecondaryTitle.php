<?php

namespace App\Models\web;

use Illuminate\Database\Eloquent\Model;

class FooterSecondaryTitle extends Model
{
    protected $fillable = ['footer_title_id', 'title', 'url', 'locale', 'order'];
    
    public function title() 
    { 
        return $this->belongsTo(FooterTitle::class);
    }
}
