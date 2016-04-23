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
        DB::table('categories')->insert(['slug' => 'biaopai', 'name' => '标牌', 'main'=>1]);
        DB::table('categories')->insert(['slug' => 'huizhang', 'name' => '徽章', 'main'=>1]);
        DB::table('categories')->insert(['slug' => 'diaopai', 'name' => '吊牌', 'main'=>1]);
        DB::table('categories')->insert(['slug' => 'baozhuang', 'name' => '包装', 'main'=>1]);
        DB::table('categories')->insert(['slug' => 'yinshua', 'name' => '印刷', 'main'=>1]);

        // Seed sub categories for biaopai
        DB::table('categories')->insert(['slug' => 'anquan', 'name' => '安全标牌', 'parent_id' => 1, 'main'=>1]);
        DB::table('categories')->insert(['slug' => 'dianli', 'name' => '电力电网标牌', 'parent_id' => 1, 'main'=>1]);
        DB::table('categories')->insert(['slug' => 'gonglu', 'name' => '公路、景区标牌', 'parent_id' => 1, 'main'=>1]);
        DB::table('categories')->insert(['slug' => 'jiangpai', 'name' => '奖牌、牌匾', 'parent_id' => 1, 'main'=>1]);
        DB::table('categories')->insert(['slug' => 'keshi', 'name' => '科室牌、门牌、栋号牌、楼层牌', 'parent_id' => 1, 'main'=>1]);
        DB::table('categories')->insert(['slug' => 'yakeli', 'name' => '亚克力标牌', 'parent_id' => 1, 'main'=>1]);
        DB::table('categories')->insert(['slug' => 'caoping', 'name' => '草地牌', 'parent_id' => 1, 'main'=>1]);
        DB::table('categories')->insert(['slug' => 'famen', 'name' => '阀门牌、设备铭牌', 'parent_id' => 1, 'main'=>1]);
        DB::table('categories')->insert(['slug' => 'gongshilan', 'name' => '公示栏', 'parent_id' => 1, 'main'=>1]);
        DB::table('categories')->insert(['slug' => 'cheku', 'name' => '地下车库车位标牌', 'parent_id' => 1, 'main'=>1]);
        DB::table('categories')->insert(['slug' => 'jiaxiao', 'name' => '驾校驾考场地标牌', 'parent_id' => 1, 'main'=>1]);
        DB::table('categories')->insert(['slug' => 'jiashiyuan', 'name' => '驾驶员实习标志', 'parent_id' => 1, 'main'=>1]);
        DB::table('categories')->insert(['slug' => 'qiche', 'name' => '汽车标牌', 'parent_id' => 1, 'main'=>1]);

        // Seed series categories for biaopai
        DB::table('categories')->insert(['slug' => 'yinshua', 'name' => '印刷系列', 'parent_id' => 1, 'main'=>0]);
        DB::table('categories')->insert(['slug' => 'siyin', 'name' => '丝印系列', 'parent_id' => 1, 'main'=>0]);
        DB::table('categories')->insert(['slug' => 'fushi', 'name' => '腐蚀系列', 'parent_id' => 1, 'main'=>0]);
        DB::table('categories')->insert(['slug' => 'fanguang', 'name' => '反光系列', 'parent_id' => 1, 'main'=>0]);
        DB::table('categories')->insert(['slug' => 'yeguang', 'name' => '夜光系列', 'parent_id' => 1, 'main'=>0]);
        DB::table('categories')->insert(['slug' => 'chongya', 'name' => '冲压系列', 'parent_id' => 1, 'main'=>0]);
        DB::table('categories')->insert(['slug' => 'duxinban', 'name' => '镀锌板系列', 'parent_id' => 1, 'main'=>0]);
        DB::table('categories')->insert(['slug' => 'buxiugang', 'name' => '不锈钢系列', 'parent_id' => 1, 'main'=>0]);
        DB::table('categories')->insert(['slug' => 'penhui', 'name' => '喷绘写真系列', 'parent_id' => 1, 'main'=>0]);
        DB::table('categories')->insert(['slug' => 'lvban', 'name' => '铝板反光系列', 'parent_id' => 1, 'main'=>0]);
        DB::table('categories')->insert(['slug' => 'yakeli', 'name' => '亚克力丝印系列', 'parent_id' => 1, 'main'=>0]);
    }
}
