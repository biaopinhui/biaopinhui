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
        DB::table('categories')->insert(['name' => 'bp-anquan', 'parent_id' => 1]);
        DB::table('categories')->insert(['name' => 'bp-dianli', 'parent_id' => 1]);
        DB::table('categories')->insert(['name' => 'bp-gonglu', 'parent_id' => 1]);
        DB::table('categories')->insert(['name' => 'bp-jiangpai', 'parent_id' => 1]);
        DB::table('categories')->insert(['name' => 'bp-keshi', 'parent_id' => 1]);
        DB::table('categories')->insert(['name' => 'bp-yakeli', 'parent_id' => 1]);
        DB::table('categories')->insert(['name' => 'bp-caoping', 'parent_id' => 1]);
        DB::table('categories')->insert(['name' => 'bp-famen', 'parent_id' => 1]);
        DB::table('categories')->insert(['name' => 'bp-gongshilan', 'parent_id' => 1]);
        DB::table('categories')->insert(['name' => 'bp-cheku', 'parent_id' => 1]);
        DB::table('categories')->insert(['name' => 'bp-jiaxiao', 'parent_id' => 1]);
        DB::table('categories')->insert(['name' => 'bp-jiashiyuan', 'parent_id' => 1]);
        DB::table('categories')->insert(['name' => 'bp-qiche', 'parent_id' => 1]);
    }
}
