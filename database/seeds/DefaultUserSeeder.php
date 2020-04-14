<?php

use App\Address;
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
        ]);

        Address::create([
            'user_id' => '1',
            'state' => 'Bogotá D.C',
            'city' => 'Usaquén',
            'career' => 'Carrera',
            'streetNumber' => '54',
            'street' => '152',
            'street2' => '52',
            'additionalData' => "Deje to' to la mercancia en un maletin, en un un arbol pela'o que hay al lado de una lagunita, el se llega solo relajao",
            'current' => '1',
        ]);
    }
}
