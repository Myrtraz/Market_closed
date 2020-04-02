<?php

use App\User;
use Illuminate\Database\Seeder;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => "Marco",
        	'lastname' => "Estaba",
        	'email' => "ex@example.com",
        	'password' => bcrypt('12345'),
        	'username' => "Marcelo",
        	'document' => "27710261",
        	'phone' => "987654321",
        	'card' => "34215672",
        	'address' => "Cra.X, #xxx-xxx, bogotá",
            'state' => 'Bogotá',
            'country' => 'Colombia',
            'district' => 'Suba',
            'additionalData' => "Deje to' to la mercancia en un maletin, en un un arbol pela'o que hay al lado de una lagunita, el se llega solo relajao",
        ]);
    }
}
