<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call(DefaultUserSeeder::class);
        $this->call(SportsProductsSeeder::class);
        $this->call(PhonesProductsSeeder::class);
        $this->call(HeadphonesProductsSeeder::class);
        $this->call(ShirtsProductsSeeder::class);
        $this->call(FurnituresProductsSeeder::class);
        $this->call(VideoGamesProductsSeeder::class);
        $this->call(Payment_MethodsSeeder::class);
    }
}
