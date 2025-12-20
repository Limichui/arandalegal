<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('web.home');
});

Route::get('/contacto', function () {
    return view('web.contact');
});

Route::get('/por-que-elegirnos', function () {
    return view('web.why-choose-us');
});

Route::get('/staff-de-profesionales', function () {
    return view('web.professional-staff');
});

Route::get('/asesoramiento-legal', function () {
    return view('web.legal-advice');
});

Route::get('/asesoramiento-comercial', function () {
    return view('web.business-advice');
});

Route::get('/perfil-profesional', function () {
    return view('web.professional-profile');
});