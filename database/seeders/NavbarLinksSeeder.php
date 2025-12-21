<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\web\NavbarLink;

class NavbarLinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Links principales
        NavbarLink::create([
            'title' => 'Inicio',
            'url' => '/',
            'order' => 1
        ]);

        NavbarLink::create([
            'title' => 'Nuestra Firma',
            'url' => '#',
            'order' => 2
        ]);

        NavbarLink::create([
            'title' => 'Servicios',
            'url' => '#',
            'order' => 3
        ]);

        NavbarLink::create([
            'title' => 'Contacto',
            'url' => '/contacto',
            'order' => 4
        ]);

        // Submenús de "Nuestra Firma"
        NavbarLink::create([
            'title' => '¿Por qué elegirnos?',
            'url' => '/por-que-elegirnos',
            'parent' => 'Nuestra Firma',
            'order' => 1
        ]);

        NavbarLink::create([
            'title' => 'Staff de Profesionales',
            'url' => '/staff-de-profesionales',
            'parent' => 'Nuestra Firma',
            'order' => 2
        ]);

        // Submenús de "Servicios"
        NavbarLink::create([
            'title' => 'Asesoramiento Legal',
            'url' => '/asesoramiento-legal',
            'parent' => 'Servicios',
            'order' => 1
        ]);

        NavbarLink::create([
            'title' => 'Asesoramiento Contable',
            'url' => '/asesoramiento-comercial',
            'parent' => 'Servicios',
            'order' => 2
        ]);
    }
}
