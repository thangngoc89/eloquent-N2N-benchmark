<?php

use App\Category;
use App\Product;
use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Illuminate\Support\Collection;
use Laracasts\TestDummy\Factory as TestDummy;

class CategoryProductTableSeeder extends Seeder {

    /**
     *
     */
    public function run()
    {
        $categories = Category::orderByRaw('RAND()')->get();

        $products = Product::all()->lists('id');

        foreach ($categories as $category)
        {
            $products_id = new Collection($products);
            $products_id = $products_id->random(rand(5,20));

            $category->products()->sync($products_id);
        }
    }

}