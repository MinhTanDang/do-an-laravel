<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\NguoiChoi;
class NguoiChoiController extends Controller
{
    public function layDSNguoiChoi(){
        $dsNguoiChoi = NguoiChoi::all();
        $result = [
            'success' => true,
            'data' => $dsNguoiChoi
        ];
        return response()->json($result);
    }

    public function xuLyDangNhap(Request $request){
        $taiKhoan = $request->ten_dang_nhap;
        $flag = false;
        $message = "";
        
        $nguoiChoi = NguoiChoi::where('ten_dang_nhap', $taiKhoan)->first();
        if($nguoiChoi != null && Hash::check($request->mat_khau, $nguoiChoi->mat_khau)){
            $flag = true;
            $message = "Dang Nhap Thanh Cong";
        }
        else{
           $message = "Dang Nhap That Bai";
        }

        $result = [
            'success' => $flag,
            'data' => $nguoiChoi,
            'message' => $message
        ];
        return response()->json($result);
    }

}
