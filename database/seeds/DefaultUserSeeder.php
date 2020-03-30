<?php

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
        	'email' => "example@example.com",
        	'password' => bcrypt('12345'),
        	'username' => "Maec",
        	'document' => "123456789",
        	'phone' => "123456789",
        	'card' => "1234432112344321",
        	'location' => "Cra.X, #xxx-xxx, bogotá",
        ]);
    }
}
