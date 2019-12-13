<?php
    use Illuminate\Database\Seeder;

    class DatabaseSeeder extends Seeder{
        public function run(){
            $this->call(LinhVucSeeder::class);

            $this->call(CauHoiSeeder::class);

            $this->call(NguoiChoiSeeder::class);

            $this->call(LuotChoiSeeder::class);

            $this->call(CauHinhAppSeeder::class);

            $this->call(CauHinhDiemCauHoi::class);

            $this->call(CauHinhTroGiupSeeder::class);
            
            $this->call(ChiTietLuotChoiSeeder::class);

            $this->call(GoiCreditSeeder::class);
            
            $this->call(LichSuMuaCreditSeeder::class);

            $this->call(QuanTriVienSeeder::class);

        }
    }
?>
