<?php

use Illuminate\Database\Seeder;

class GoiCreditSeeder extends Seeder
{
    public function run(){
        DB::table('goi_credit')->insert([
            ['ten_goi' => 'Sinh viên giàu', 'credit' => 500, 'so_tien' => 400000],
            ['ten_goi' => 'Sinh viên vừa vừa', 'credit' => 200, 'so_tien' => 170000],
            ['ten_goi' => 'Sinh viên nghèo', 'credit' => 100, 'so_tien' => 90000],
            ['ten_goi' => 'Chơi game không nạp tiền', 'credit' => 50, 'so_tien' => 50000],
        ]);
    }
}
