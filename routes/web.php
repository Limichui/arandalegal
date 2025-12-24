<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\NavbarController;
use Illuminate\Support\Facades\App; 
use Illuminate\Support\Facades\Session;


Route::get('/', [NavbarController::class, 'showPage'])->name('home');

Route::get('/por-que-elegirnos', [NavbarController::class, 'showPage'])->name('why-choose-us');
Route::get('/staff-de-profesionales', [NavbarController::class, 'showPage'])->name('professional-staff');

Route::get('/asesoramiento-legal', [NavbarController::class, 'showPage'])->name('legal-advice');
Route::get('/asesoramiento-comercial', [NavbarController::class, 'showPage'])->name('business-advice');

Route::get('/contacto', [NavbarController::class, 'showPage'])->name('contact');


Route::get('/perfil-profesional', [NavbarController::class, 'showPage'])->name('professional-profile');

/*
Route::get('/perfil-profesional', function () {
    return view('web.professional-profile');
});
*/
// Cambiar idioma
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['es', 'en'])) {
        session(['app_locale' => $locale]);
    }
    //return redirect()->back();
    return back(302);
})->name('lang.switch');