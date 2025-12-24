<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function showPage()
    {
        // 1. Obtener el idioma actual (ej. 'es' o 'en')
        $locale = app()->getLocale();
        // 2. Lógica del Navbar con Traducciones
        $links = DB::table('navbar_links')
                ->join('navbar_link_translations', 'navbar_links.id', '=', 'navbar_link_translations.navbar_link_id')
                ->select('navbar_links.id', 'navbar_links.url', 'navbar_links.parent', 'navbar_links.order', 'navbar_link_translations.title')
                ->where('parent', 0)
                ->where('locale', $locale)
                ->orderBy('order')
                ->get();
        $dropdowns = DB::table('navbar_links')
                ->join('navbar_link_translations', 'navbar_links.id', '=', 'navbar_link_translations.navbar_link_id')
                ->select('navbar_link_translations.id', 'navbar_link_translations.navbar_link_id', 'navbar_links.url', 'navbar_links.parent', 'navbar_links.order', 'navbar_link_translations.title')
                ->whereNot('parent', 0)
                ->where('locale', $locale)
                ->orderBy('order')
                ->get();
        // 3. Diccionario de rutas -> vistas
        $views = [
            'home'               => 'web.home',
            'why-choose-us'      => 'web.why-choose-us',
            'professional-staff' => 'web.professional-staff',
            'legal-advice'       => 'web.legal-advice',
            'business-advice'    => 'web.business-advice',
            'contact'            => 'web.contact',
            'professional-profile'=> 'web.professional-profile',
        ];

        $currentRoute = Route::currentRouteName();
        $view = $views[$currentRoute] ?? 'web.home';

        return view($view, compact('links', 'dropdowns'));
    }
}
