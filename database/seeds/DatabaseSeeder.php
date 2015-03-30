<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::statement('TRUNCATE TABLE categories');
        DB::statement('TRUNCATE TABLE products');
        DB::statement('TRUNCATE TABLE category_product');
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

		Model::unguard();

		 $this->call('CategoriesTableSeeder');
		 $this->call('ProductsTableSeeder');
		 $this->call('CategoryProductTableSeeder');
	}

}
