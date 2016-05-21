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
        DB::table('categories')->insert(['id' => 1, 'slug' => 'biaopai', 'name' => '标牌']);
        DB::table('categories')->insert(['id' => 2, 'slug' => 'huizhang', 'name' => '徽章']);
        DB::table('categories')->insert(['id' => 3, 'slug' => 'diaopai', 'name' => '吊牌']);
        DB::table('categories')->insert(['id' => 4, 'slug' => 'baozhuang', 'name' => '包装']);
        DB::table('categories')->insert(['id' => 5, 'slug' => 'yinshua', 'name' => '印刷']);

        // Seed sub categories for biaopai
        DB::table('categories')->insert(['id' => 6, 'slug' => 'anquan', 'name' => '安全标牌', 'parent_id' => 1]);
        DB::table('categories')->insert(['id' => 7, 'slug' => 'dianli', 'name' => '电力电网标牌', 'parent_id' => 1]);
        DB::table('categories')->insert(['id' => 8, 'slug' => 'gonglu', 'name' => '公路、景区标牌', 'parent_id' => 1]);
        DB::table('categories')->insert(['id' => 9, 'slug' => 'jiangpai', 'name' => '奖牌、牌匾', 'parent_id' => 1]);
        DB::table('categories')->insert(['id' => 10, 'slug' => 'keshi', 'name' => '科室牌、门牌、栋号牌、楼层牌', 'parent_id' => 1]);
        DB::table('categories')->insert(['id' => 11, 'slug' => 'yakeli', 'name' => '亚克力标牌', 'parent_id' => 1]);
        DB::table('categories')->insert(['id' => 12, 'slug' => 'caodi', 'name' => '草地牌', 'parent_id' => 1]);
        DB::table('categories')->insert(['id' => 13, 'slug' => 'famen', 'name' => '阀门牌、设备铭牌', 'parent_id' => 1]);
        DB::table('categories')->insert(['id' => 14, 'slug' => 'gongshilan', 'name' => '公示栏', 'parent_id' => 1]);
        DB::table('categories')->insert(['id' => 15, 'slug' => 'cheku', 'name' => '地下车库车位标牌', 'parent_id' => 1]);
        DB::table('categories')->insert(['id' => 16, 'slug' => 'jiaxiao', 'name' => '驾校驾考场地标牌', 'parent_id' => 1]);
        DB::table('categories')->insert(['id' => 17, 'slug' => 'jiashiyuan', 'name' => '驾驶员实习标志', 'parent_id' => 1]);
        DB::table('categories')->insert(['id' => 18, 'slug' => 'qiche', 'name' => '汽车标牌', 'parent_id' => 1]);
    }
}
