<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Seed products
        for ($c = 6; $c < 19; $c++) {
        	for ($i = $c * 10 -59; $i < $c * 10 - 49; $i++) {
    	        DB::table('products')->insert([
    	        	'name' => 'bp-product' . $i,
                    'title' => '标牌 - 产品' . $i,
    	        	'price' => $c - 5,
    	        	'description' => '这是第' . $i . '个标牌产品'
    	        ]);

                DB::table('category_product')->insert([
                    'category_id' => $c,
                    'product_id' => $i
                ]);
            }
    	}
    }
}
