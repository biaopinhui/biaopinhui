<?php

use Illuminate\Database\Seeder;

class FilterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed series filter for biaopai
        DB::table('filters')->insert(['id' => 1, 'type' => 'series', 'slug' => 'yinshua', 'name' => '印刷系列', 'category_id' => 1]);
        DB::table('filters')->insert(['id' => 2, 'type' => 'series', 'slug' => 'siyin', 'name' => '丝印系列', 'category_id' => 1]);
        DB::table('filters')->insert(['id' => 3, 'type' => 'series', 'slug' => 'fushi', 'name' => '腐蚀系列', 'category_id' => 1]);
        DB::table('filters')->insert(['id' => 4, 'type' => 'series', 'slug' => 'fanguang', 'name' => '反光系列', 'category_id' => 1]);
        DB::table('filters')->insert(['id' => 5, 'type' => 'series', 'slug' => 'yeguang', 'name' => '夜光系列', 'category_id' => 1]);
        DB::table('filters')->insert(['id' => 6, 'type' => 'series', 'slug' => 'chongya', 'name' => '冲压系列', 'category_id' => 1]);
        DB::table('filters')->insert(['id' => 7, 'type' => 'series', 'slug' => 'duxinban', 'name' => '镀锌板系列', 'category_id' => 1]);
        DB::table('filters')->insert(['id' => 8, 'type' => 'series', 'slug' => 'buxiugang', 'name' => '不锈钢系列', 'category_id' => 1]);
        DB::table('filters')->insert(['id' => 9, 'type' => 'series', 'slug' => 'penhui', 'name' => '喷绘写真系列', 'category_id' => 1]);
        DB::table('filters')->insert(['id' => 10, 'type' => 'series', 'slug' => 'lvban', 'name' => '铝板反光系列', 'category_id' => 1]);
        DB::table('filters')->insert(['id' => 11, 'type' => 'series', 'slug' => 'yakeli', 'name' => '亚克力丝印系列', 'category_id' => 1]);
    }
}
