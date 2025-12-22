<?php

namespace App\Models\web;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Dom\Attr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class NavbarLink extends Model
{
    // 1. Eliminamos 'title' porque ahora vive en la tabla navbar_link_translations
    protected $fillable = ['url', 'parent', 'order'];

    protected $appends = ['current_title'];
    /**
     * Relación con las traducciones.
     */
    public function translations(): HasMany
    {
        // Importante: Asegúrate de tener el modelo NavbarLinkTranslation creado
        return $this->hasMany(NavbarLinkTranslation::class, 'navbar_link_id');
    }

}
