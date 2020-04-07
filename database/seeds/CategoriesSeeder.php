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
            'icon' => 'far fa-futbol'
        ]);

        Categories::create([
        	'name' => 'Celulares',
            'icon' => 'fas fa-mobile-alt'
        ]);

        Categories::create([
        	'name' => 'Auriculares',
            'icon' => 'fas fa-headphones'
        ]);

        Categories::create([
        	'name' => 'Camisetas',
            'icon' => 'fas fa-tshirt'
        ]);

        Categories::create([
        	'name' => 'Muebles',
            'icon' => 'fas fa-couch'
        ]);

        Categories::create([
        	'name' => 'Consola y videojuegos',
            'icon' => 'fas fa-gamepad'
        ]);

    }
}
