<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.Carbon
     *
     * @return void
     */
    public function run()
    {
    	// Seed products
        for ($c = 6; $c < 19; $c++) {
        	for ($i = $c * 10 -59; $i < $c * 10 - 49; $i++) {
    	        DB::table('products')->insert([
                    'title' => '标牌 - 产品' . $i,
                    'price' => $c - 5,
    	        	'original_price' => $i % 4 === 0 ? $c - 4.5 : null,
                    'excerpt' => '这是第' . $i . '个标牌产品的摘要',
                    'description' => '这是第' . $i . '个标牌产品的详细描述',
                    'status' => 1,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now(),
    	        ]);

                DB::table('category_product')->insert([
                    'category_id' => $c,
                    'product_id' => $i
                ]);

                $filteId = floor(($i - 1) % 10 / 2);
                DB::table('filter_product')->insert([
                    'filter_id' => $filteId + 1,
                    'product_id' => $i
                ]);
            }
    	}
    }
}
