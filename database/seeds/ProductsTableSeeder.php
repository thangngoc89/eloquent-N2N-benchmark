<?php

use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory as TestDummy;

class ProductsTableSeeder extends Seeder {

    public function run()
    {
         TestDummy::times(10000)->create('App\Product');
    }

}