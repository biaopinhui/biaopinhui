<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['name' => 'biaopai']);
        DB::table('categories')->insert(['name' => 'huizhang']);
        DB::table('categories')->insert(['name' => 'diaopai']);
        DB::table('categories')->insert(['name' => 'baozhuang']);
        DB::table('categories')->insert(['name' => 'yinshua']);

        // Seed sub categories for biaopai
        DB::table('categories')->insert(['name' => 'anquan', 'parent_id' => 1]);
        DB::table('categories')->insert(['name' => 'dianli', 'parent_id' => 1]);
        DB::table('categories')->insert(['name' => 'gonglu', 'parent_id' => 1]);
        DB::table('categories')->insert(['name' => 'jiangpai', 'parent_id' => 1]);
        DB::table('categories')->insert(['name' => 'keshi', 'parent_id' => 1]);
        DB::table('categories')->insert(['name' => 'yakeli', 'parent_id' => 1]);
        DB::table('categories')->insert(['name' => 'caoping', 'parent_id' => 1]);
        DB::table('categories')->insert(['name' => 'famen', 'parent_id' => 1]);
        DB::table('categories')->insert(['name' => 'gongshilan', 'parent_id' => 1]);
        DB::table('categories')->insert(['name' => 'cheku', 'parent_id' => 1]);
        DB::table('categories')->insert(['name' => 'jiaxiao', 'parent_id' => 1]);
        DB::table('categories')->insert(['name' => 'jiashiyuan', 'parent_id' => 1]);
        DB::table('categories')->insert(['name' => 'qiche', 'parent_id' => 1]);
    }
}
