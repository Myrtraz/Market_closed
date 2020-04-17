<?php

use App\Shipping;
use Illuminate\Database\Seeder;

class ShippingMethodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shipping::create([
       	'name' => 'Mercado Envio',
       	'type' => 'Envio',
       	'img' => '#',
       	'icon' => 'fas fa-truck',
       ]);

       Shipping::create([
       	'name' => 'ServiEntrega',
       	'type' => 'Envio',
       	'img' => '#',
       	'icon' => 'fas fa-truck',
       ]);
    }
}
