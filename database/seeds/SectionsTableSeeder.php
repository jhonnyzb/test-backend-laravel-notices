<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sections = [
            ['name' => 'Deportes'],
            ['name' => 'Política'],
            ['name' => 'Social'],
            ['name' => 'Internacional'],
            ['name' => 'Cultura'],
            ['name' => 'Salud'],
        ];

        DB::table('sections')->insert($sections);
    }
}
