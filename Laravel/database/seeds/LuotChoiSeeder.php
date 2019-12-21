<?php

use Illuminate\Database\Seeder;

class LuotChoiSeeder extends Seeder
{
    public function run(){
        DB::table('luot_choi')->insert([
            ['nguoi_choi_id' => 1, 'so_cau' => 10, 'diem' => 300],
            ['nguoi_choi_id' => 2, 'so_cau' => 30, 'diem' => 300],
            ['nguoi_choi_id' => 3, 'so_cau' => 40, 'diem' => 400],
            ['nguoi_choi_id' => 4, 'so_cau' => 90, 'diem' => 500],
            ['nguoi_choi_id' => 5, 'so_cau' => 50, 'diem' => 600],
            ['nguoi_choi_id' => 6, 'so_cau' => 60, 'diem' => 200],
            ['nguoi_choi_id' => 2, 'so_cau' => 10, 'diem' => 400]
        ]);
    }
}
