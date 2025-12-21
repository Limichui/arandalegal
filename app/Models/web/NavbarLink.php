<?php

namespace App\Models\web;

use Illuminate\Database\Eloquent\Model;

class NavbarLink extends Model
{
    protected $fillable = ['title', 'url', 'parent', 'order'];
}
