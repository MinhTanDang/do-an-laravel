<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Auth;

    class QuanTriVienController extends Controller
    {
        protected $redirectTo = 'layout';
        //
        public function dangNhap(){
            return view('quan-tri-vien.dang-nhap');
        }

        public function xuLyDangNhap(Request $request){
            $tenDangNhap = $request->ten_dang_nhap;
            $matKhau = $request->mat_khau;
            if(Auth::attempt(['ten_dang_nhap' => $tenDangNhap, 'password' => $matKhau])){
                return view('layout');
            }
            return view('quan-tri-vien.dang-nhap');
        }

        public function dangXuat(){
            Auth::logout();
            return redirect()->route('quan-tri-vien.dang-nhap');
        }
    }
?>
