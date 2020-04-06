<?php

use App\Categories;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::create([
        	'name' => 'Deportes y Fitness',
        ]);

        Categories::create([
        	'name' => 'Celulares',
        ]);

        Categories::create([
        	'name' => 'Auriculares',
        ]);

        Categories::create([
        	'name' => 'Camisetas',
        ]);

        Categories::create([
        	'name' => 'Muebles',
        ]);

        Categories::create([
        	'name' => 'Consola y videojuegos',
        ]);

    }
}
