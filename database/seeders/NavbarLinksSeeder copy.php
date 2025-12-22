<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\web\NavbarLink;
use Illuminate\Support\Facades\DB;

class NavbarLinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Definimos los links con sus traducciones
        $links = [
            [
                'url' => '/', 'order' => 1, 'parent' => null,
                'translations' => ['es' => 'Inicio', 'en' => 'Home']
            ],
            [
                'url' => '#', 'order' => 2, 'parent' => null,
                'translations' => ['es' => 'Nuestra Firma', 'en' => 'Our Firm']
            ],
            [
                'url' => '#', 'order' => 3, 'parent' => null,
                'translations' => ['es' => 'Servicios', 'en' => 'Services']
            ],
            [
                'url' => '/contacto', 'order' => 4, 'parent' => null,
                'translations' => ['es' => 'Contacto', 'en' => 'Contact']
            ],
            
            // Submenús de "Nuestra Firma" (Usamos el título en ES como identificador parent)
            [
                'url' => '/por-que-elegirnos', 'order' => 1, 'parent' => 'Nuestra Firma',
                'translations' => ['es' => '¿Por qué elegirnos?', 'en' => 'Why choose us?']
            ],
            [
                'url' => '/staff-de-profesionales', 'order' => 2, 'parent' => 'Nuestra Firma',
                'translations' => ['es' => 'Staff de Profesionales', 'en' => 'Professional Staff']
            ],

            // Submenús de "Servicios"
            [
                'url' => '/asesoramiento-legal', 'order' => 1, 'parent' => 'Servicios',
                'translations' => ['es' => 'Asesoramiento Legal', 'en' => 'Legal Advice']
            ],
            [
                'url' => '/asesoramiento-comercial', 'order' => 2, 'parent' => 'Servicios',
                'translations' => ['es' => 'Asesoramiento Contable', 'en' => 'Business Advice']
            ],
        ];

        foreach ($links as $data) {
            // 1. Crear el registro base
            $link = NavbarLink::create([
                'url'    => $data['url'],
                'parent' => $data['parent'],
                'order'  => $data['order'],
            ]);

            // 2. Crear todas las traducciones definidas
            foreach ($data['translations'] as $locale => $title) {
                DB::table('navbar_link_translations')->insert([
                    'navbar_link_id' => $link->id,
                    'locale'         => $locale,
                    'title'          => $title,
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ]);
            }
        }
    }
}
