<?php

namespace App\Models\web;

use Illuminate\Database\Eloquent\Model;

class NavbarLinkTranslation extends Model
{
    protected $fillable = ['navbar_link_id', 'locale', 'title'];

    public function navbarLink()
    {
        return $this->belongsTo(NavbarLink::class);
    }
}