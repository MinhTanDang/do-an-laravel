<?php

use Illuminate\Database\Seeder;

class QuanTriVienSeeder extends Seeder
{
    public function run(){
        $matKhau = Hash::make('tandang');
        DB::table('quan_tri_vien')->insert([
            ['ten_dang_nhap' => 'tandang', 'mat_khau' => $matKhau, 'ho_ten' => 'Đặng Minh Tân']
        ]);
    }
}
