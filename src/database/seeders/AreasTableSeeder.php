<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'area' => '北海道'
        ];
        DB::table('areas')->insert($param);
        $param = [
            'area' => '東北'
        ];
        DB::table('areas')->insert($param);
        $param = [
            'area' => '関東'
        ];
        DB::table('areas')->insert($param);
        $param = [
            'area' => '中部'
        ];
        DB::table('areas')->insert($param);
        $param = [
            'area' => '近畿'
        ];
        DB::table('areas')->insert($param);
        $param = [
            'area' => '中国'
        ];
        DB::table('areas')->insert($param);
        $param = [
            'area' => '四国'
        ];
        DB::table('areas')->insert($param);
        $param = [
            'area' => '九州'
        ];
        DB::table('areas')->insert($param);
        $param = [
            'area' => '沖縄'
        ];
        DB::table('areas')->insert($param);
        $param = [
            'area' => '海外'
        ];
        DB::table('areas')->insert($param);
        $param = [
            'area' => 'その他'
        ];
        DB::table('areas')->insert($param);
    }
}
