<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([

        	'tipo'=>'Almuerzo'
        ]);
        DB::table('categoria')->insert([

        	'tipo'=>'Ensalada'
        ]);
        DB::table('categoria')->insert([

        	'tipo'=>'Postres'
        ]);
        DB::table('categoria')->insert([

        	'tipo'=>'Reposteria'
        ]);
    }
}
