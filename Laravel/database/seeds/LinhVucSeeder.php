<?php

use Illuminate\Database\Seeder;

class LinhVucSeeder extends Seeder
{
    public function run(){
        DB::table('linh_vuc')->insert([
            ['ten_linh_vuc' => 'Thể thao'],
            ['ten_linh_vuc' => 'Lịch sử'],
            ['ten_linh_vuc' => 'Âm nhạc - phim'],
            ['ten_linh_vuc' => 'Địa lý'],
            ['ten_linh_vuc' => 'Văn học'],
            ['ten_linh_vuc' => 'Y học'],
            ['ten_linh_vuc' => 'Văn hóa - sự kiện'],
            ['ten_linh_vuc' => 'Khoa học tự nhiên']
        ]);
    }
}
