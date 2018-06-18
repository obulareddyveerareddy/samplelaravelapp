<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        //$this->call(ProductTableSeeder::class);
        $this->call(DescriptionTableSeeder::class);
        Model::reguard();
    }
}
