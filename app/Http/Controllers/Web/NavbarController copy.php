<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\web\NavbarLink;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function showPage()
    {
        // 1. Obtener el idioma actual (ej. 'es' o 'en')
        $locale = app()->getLocale();
        // 2. Lógica del Navbar con Traducciones
        // Traemos todos los links con sus traducciones filtradas por el idioma actual
        $allLinks = NavbarLink::with(['translations' => function($query) use ($locale) {
                $query->where('locale', $locale);
            }])
            ->orderBy('order')
            ->get();
            //dd($allLinks->toArray());
        // Separamos links principales y dropdowns usando la colección ya cargada (más rápido)
        $links = $allLinks->whereNull('parent');
        //dd($links->toArray());
        $dropdowns = $allLinks->whereNotNull('parent')->groupBy('parent');
        //dd($dropdowns->toArray());
        // 3. Diccionario de rutas -> vistas
        $views = [
            'home'               => 'web.home',
            'why-choose-us'      => 'web.why-choose-us',
            'professional-staff' => 'web.professional-staff',
            'legal-advice'       => 'web.legal-advice',
            'business-advice'    => 'web.business-advice',
            'contact'            => 'web.contact',
        ];

        $currentRoute = Route::currentRouteName();
        $view = $views[$currentRoute] ?? 'web.home';

        return view($view, compact('links', 'dropdowns'));
    }
    
}
