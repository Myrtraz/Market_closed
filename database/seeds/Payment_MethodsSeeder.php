<?php

use App\Payment;
use Illuminate\Database\Seeder;

class Payment_MethodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::create([
        	'name' => 'cc'
        ]);

        Payment::create([
        	'name' => 'cash'
        ]);
    }
}
