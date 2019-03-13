<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([

            'title' => 'Technika',
            'id' => 1,
        ]);

        DB::table('category')->insert([

            'title' => 'Darbo skelbimai',
            'id' => 2,
        ]);
        DB::table('category')->insert([

            'title' => 'Vaikų prekės',
            'id' => 3,
        ]);
    }
}
