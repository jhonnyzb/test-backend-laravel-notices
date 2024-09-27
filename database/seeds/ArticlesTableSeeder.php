<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $articles = [
            [
                'title' => 'La importancia del deporte en la educación',
                'image' => 'deporte.jpg',
                'content' => 'El deporte es una herramienta fundamental en el desarrollo integral de los estudiantes...',
                'section_id' => 1, // Asumiendo que "Deportes" tiene ID 1
                'author_id' => 1,  // Cambia esto por un ID de autor existente
                'published_date' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Nuevas políticas públicas en el país',
                'image' => 'politica.jpg',
                'content' => 'Las políticas públicas son esenciales para el desarrollo social y económico...',
                'section_id' => 2, // Asumiendo que "Política" tiene ID 2
                'author_id' => 1,  // Cambia esto por un ID de autor existente
                'published_date' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Agrega más artículos según sea necesario...
        ];

        DB::table('articles')->insert($articles);
    }
}
