<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;


class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $authors = [
            [
                'name' => 'Juan Pérez',
                'email' => 'juan.perez@example.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'María López',
                'email' => 'maria.lopez@example.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Carlos García',
                'email' => 'carlos.garcia@example.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Agrega más autores según sea necesario...
        ];

        DB::table('authors')->insert($authors);
    }
}
