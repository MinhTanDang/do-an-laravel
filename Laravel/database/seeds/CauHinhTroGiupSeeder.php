<?php

use Illuminate\Database\Seeder;

class CauHinhTroGiupSeeder extends Seeder
{
    public function run(){
        DB::table('cau_hinh_tro_giup')->insert([
            ['loai_tro_giup' => 'Đổi câu hỏi', 'thu_tu' => 1, 'credit' => 400],
            ['loai_tro_giup' => '50:50', 'thu_tu' => 2, 'credit' => 500],
            ['loai_tro_giup' => 'Hỏi ý kiến khán giả', 'thu_tu' => 3, 'credit' => 200],
            ['loai_tro_giup' => 'Gọi điện thoại cho người thân', 'thu_tu' => 4, 'credit' => 300]
        ]);
    }
}
