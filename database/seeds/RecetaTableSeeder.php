<?php

use Illuminate\Database\Seeder;

class RecetaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recetas')->insert([
        	'nombre'=>'pollo con papas',
        	'tipo'=>'almuerzo',
        	'ingredientes'=>'pollo y papas',
        	'preparacion'=>'cocinar el pollo y las papas aparte, y tadaaaaaa magia',

        ]);
    }
}
