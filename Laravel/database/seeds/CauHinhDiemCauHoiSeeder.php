<?php

use Illuminate\Database\Seeder;

class CauHinhDiemCauHoiSeeder extends Seeder
{
    public function run(){
        DB::table('cau_hinh_diem_cau_hoi')->insert([
            ['thu_tu' => 1, 'diem' => 100],
            ['thu_tu' => 5, 'diem' => 150],
            ['thu_tu' => 10, 'diem' => 300],
            ['thu_tu' => 15, 'diem' => 700]
        ]);
    }
}
