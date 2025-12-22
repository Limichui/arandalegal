<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\NavbarController;


Route::get('/', [NavbarController::class, 'showPage'])->name('home');

Route::get('/por-que-elegirnos', [NavbarController::class, 'showPage'])->name('why-choose-us');
Route::get('/staff-de-profesionales', [NavbarController::class, 'showPage'])->name('professional-staff');

Route::get('/asesoramiento-legal', [NavbarController::class, 'showPage'])->name('legal-advice');
Route::get('/asesoramiento-comercial', [NavbarController::class, 'showPage'])->name('business-advice');

Route::get('/contacto', [NavbarController::class, 'showPage'])->name('contact');

Route::get('/perfil-profesional', function () {
    return view('web.professional-profile');
});