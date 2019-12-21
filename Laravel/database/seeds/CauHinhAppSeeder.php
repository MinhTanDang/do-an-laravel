<?php

use Illuminate\Database\Seeder;

class CauHinhAppSeeder extends Seeder
{
    public function run(){
        DB::table('cau_hinh_app')->insert([
            ['co_hoi_sai' => 4, 'thoi_gian_tra_loi' => 25]
        ]);
    }
}
