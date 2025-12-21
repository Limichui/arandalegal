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
        // 1. Lógica del Navbar (Centralizada)
        $links = NavbarLink::whereNull('parent')->orderBy('order')->get(); // Links principales
        $dropdowns = NavbarLink::whereNotNull('parent')->orderBy('order')->get()->groupBy('parent'); // Links agrupados por dropdown

        // 2. Diccionario de rutas -> vistas
        // La clave es el ->name() de la ruta, el valor es el archivo .blade.php
        $views = [
            'home'               => 'web.home',
            'why-choose-us'      => 'web.why-choose-us',
            'professional-staff' => 'web.professional-staff',
            'legal-advice'       => 'web.legal-advice',
            'business-advice'    => 'web.business-advice',
            'contact'            => 'web.contact',
        ];

        // 3. Obtener el nombre de la ruta actual
        $currentRoute = Route::currentRouteName();

        // 4. Seleccionar la vista (y una por defecto por seguridad)
        $view = $views[$currentRoute] ?? 'web.home';

        return view($view, compact('links', 'dropdowns'));
    }
    
}
