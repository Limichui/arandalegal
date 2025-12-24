<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Títulos principales (español e inglés)
        $titles = [
            ['id' => 1, 'title' => 'Contáctenos', 'locale' => 'es', 'order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'title' => 'Contact us', 'locale' => 'en', 'order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'title' => 'Enlaces Populares', 'locale' => 'es', 'order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'title' => 'Popular Links', 'locale' => 'en', 'order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'title' => 'Boletín Informativo', 'locale' => 'es', 'order' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'title' => 'Newsletter', 'locale' => 'en', 'order' => 3, 'created_at' => now(), 'updated_at' => now()],
            
        ];

        DB::table('footer_titles')->insert($titles);

        // Subtítulos y enlaces
        $secondary = [
            // Contacto
            ['footer_title_id' => 1, 'title' => 'Oficina La Paz: Edificio Alborada, calle Juan de la Riva N° 1406, esquina calle Loayza Piso 4, oficina 407.', 'url' => '', 'locale' => 'es', 'order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['footer_title_id' => 2, 'title' => 'La Paz Office: Alborada Building, Juan de la Riva Street No. 1406, corner of Loayza Street, 4th Floor, office 407.', 'url' => '', 'locale' => 'en', 'order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['footer_title_id' => 1, 'title' => 'Oficina Santa Cruz: Calle Gabriel Jose Moreno Nro. 3595, Santos Dumont, Barrio La Morita.', 'url' => '', 'locale' => 'es', 'order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['footer_title_id' => 2, 'title' => 'Santa Cruz Office: Gabriel Jose Moreno Street No. 3595, Santos Dumont, La Morita.', 'url' => '', 'locale' => 'en', 'order' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Enlaces populares
            ['footer_title_id' => 3, 'title' => 'Inicio', 'url' => '/', 'locale' => 'es', 'order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['footer_title_id' => 4, 'title' => 'Home', 'url' => '/', 'locale' => 'en', 'order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['footer_title_id' => 3, 'title' => '¿Por qué elegirnos?', 'url' => '/por-que-elegirnos', 'locale' => 'es', 'order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['footer_title_id' => 4, 'title' => 'Why choose us?', 'url' => '/por-que-elegirnos', 'locale' => 'en', 'order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['footer_title_id' => 3, 'title' => 'Staff de Profesionales', 'url' => '/staff-de-profesionales', 'locale' => 'es', 'order' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['footer_title_id' => 4, 'title' => 'Professional Staff', 'url' => '/staff-de-profesionales', 'locale' => 'en', 'order' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['footer_title_id' => 3, 'title' => 'Asesoramiento Legal', 'url' => '/asesoramiento-legal', 'locale' => 'es', 'order' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['footer_title_id' => 4, 'title' => 'Legal Advice', 'url' => '/asesoramiento-legal', 'locale' => 'en', 'order' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['footer_title_id' => 3, 'title' => 'Asesoramiento Contable', 'url' => '/asesoramiento-comercial', 'locale' => 'es', 'order' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['footer_title_id' => 4, 'title' => 'Business Advice', 'url' => '/asesoramiento-comercial', 'locale' => 'en', 'order' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['footer_title_id' => 3, 'title' => 'Contacto', 'url' => '/contacto', 'locale' => 'es', 'order' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['footer_title_id' => 4, 'title' => 'Contact', 'url' => '/contacto', 'locale' => 'en', 'order' => 6, 'created_at' => now(), 'updated_at' => now()],
            // Boletín
            ['footer_title_id' => 5, 'title' => 'Reciba actualizaciones legales, novedades y consejos profesionales directamente en su correo.', 'url' => '', 'locale' => 'es', 'order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['footer_title_id' => 6, 'title' => 'Receive legal updates, news, and professional advice directly in your inbox.', 'url' => '', 'locale' => 'en', 'order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['footer_title_id' => 5, 'title' => 'Tu Email', 'url' => '', 'locale' => 'es', 'order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['footer_title_id' => 6, 'title' => 'Your Email', 'url' => '', 'locale' => 'en', 'order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['footer_title_id' => 5, 'title' => 'Inscribirse', 'url' => '', 'locale' => 'es', 'order' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['footer_title_id' => 6, 'title' => 'Register', 'url' => '', 'locale' => 'en', 'order' => 3, 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('footer_secondary_titles')->insert($secondary);
        
    }
}

