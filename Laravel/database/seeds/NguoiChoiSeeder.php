<?php

use Illuminate\Database\Seeder;

class NguoiChoiSeeder extends Seeder
{
    public function run(){
        DB::table('nguoi_choi')->insert([
            ['ten_dang_nhap' => 'tandang', 'mat_khau' => 'tandang', 'email' => 'tandang@gmail.com', 'hinh_dai_dien' => 'tandang.jpg', 'diem_cao_nhat' => 1200, 'credit' => 3000],
            ['ten_dang_nhap' => 'thamhuynh', 'mat_khau' => 'thamhuynh', 'email' => 'thamhuynh@gmail.com', 'hinh_dai_dien' => 'thamhuynh.jpg', 'diem_cao_nhat' => 12000, 'credit' => 30000],
            ['ten_dang_nhap' => 'totpham', 'mat_khau' => 'totpham', 'email' => 'totpham@gmail.com', 'hinh_dai_dien' => 'totpham.jpg', 'diem_cao_nhat' => 120000, 'credit' => 300000],
        ]);
    }
}
