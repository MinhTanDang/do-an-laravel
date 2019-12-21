<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\NguoiChoi;

class NguoiChoiControllerAPI extends Controller
{
    //register
    //login
    //repassword
    public function rank(){
        $nguoiChois = NguoiChoi::orderBy('diem_cao_nhat', 'desc')->take(10);
        if($nguoiChois->count() > 0){
            $result = [
                'success' => true,
                'nguoi_choi_rank' => $nguoiChois->get()
            ];
        }
        else{
            $result = [
                'success' => false,
                'nguoi_choi_rank' => null
            ];
        }
        return json_encode($result);
    }
    //

    public function register(Request $request){
        $flag = NguoiChoi::where('ten_dang_nhap', $request->ten_dang_nhap)->get()->count();
        if($flag == 0){
            $nguoiChoi = new NguoiChoi;
            $nguoiChoi->ten_dang_nhap = $request->ten_dang_nhap;
            $nguoiChoi->mat_khau = Hash::make($request->mat_khau);
            $nguoiChoi->email = $request->email;
            $nguoiChoi->hinh_dai_dien = $request->ten_dang_nhap . '.jpg';
            $nguoiChoi->diem_cao_nhat = 0;
            $nguoiChoi->credit = 0;
            $nguoiChoi->save();
            //
            $result = [
                'success' => true,
                'message' => 'Đăng ký thành công!'
            ];
        }
        else{
            $result = [
                'success' => false,
                'message' => 'Đăng ký thất bại, tên tài khoản đã tồn tại!'
            ];
        }
        return response()->json($result);
    }
    public function login($tenDangNhap, $matKhau, $email){

    }
    public function repassword(){

    }
}
