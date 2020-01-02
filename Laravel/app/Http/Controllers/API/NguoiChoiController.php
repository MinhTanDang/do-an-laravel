<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\NguoiChoi;
use App\LuotChoi;
use App\GoiCredit;
use App\LichSuMuaCredit;
use App\ChiTietLuotChoi;

class NguoiChoiControllerAPI extends Controller
{
    public function dangKy(Request $request){
        $nguoiChoi = NguoiChoi::where('ten_dang_nhap', $request->ten_dang_nhap);
        if($nguoiChoi->count() != 1){
            $nguoiChoi = new NguoiChoi;
            $nguoiChoi->ten_dang_nhap = $request->ten_dang_nhap;
            $nguoiChoi->mat_khau = Hash::make($request->mat_khau);
            $nguoiChoi->email = $request->email;
            $nguoiChoi->save();
            $result = [
                'success' => true,
                'message' => 'Đăng ký tài khoản thành công!'
            ];
        }
        else{
            $result = [
                'success' => false,
                'message' => 'Đăng ký tài khoản thất bại, tên đăng nhập đã tồn tại!'
            ];
        }
        return response()->json($result);
    }

    public function dangNhap(Request $request){
        $credentials = [
            'ten_dang_nhap' => $request->ten_dang_nhap,
            'password' => $request->mat_khau
        ];

        if($token = auth('nguoi_choi-api')->attempt($credentials)){
            $result = [
                'success' => true,
                'message' => 'Đăng nhập thành công!',
                'token' => $token
            ];
        }
        else{
            $result = [
                'success' => false,
                'message' => 'Tên đăng nhập hoặc mật khẩu không chính xác!',
            ];
        }
        return response()->json($result);
    }

    public function quenMatKhau(){
        
    }

    public function capNhat(Request $request){
        $nguoiChoi = auth('nguoi_choi-api')->user();
        if($nguoiChoi != null){
            $nguoiChoi->email = $request->email;
            $nguoiChoi->hinh_dai_dien = $request->hinh_dai_dien;
            $nguoiChoi->mat_khau = Hash::make($request->mat_khau);
            $nguoiChoi->save();
            
            auth('nguoi_choi-api')->logout();
            $credentials = [
                'ten_dang_nhap' => $nguoiChoi->ten_dang_nhap,
                'password' => $request->mat_khau
            ];

            $result = [
                'success' => true,
                'message' => 'Cập nhật tài khoản thành công!',
                'token' => auth('nguoi_choi-api')->attempt($credentials)
            ];
        }
        else{
            $result = [
                'success' => false,
                'message' => 'Cập nhật tài khoản thất bại, unauthorized!',
            ];
        }
        return response()->json($result);
    }

    public function luuLuotChoi(){
       
    }

    public function layLichSuChoi(Request $request){
        $nguoiChoi = auth('nguoi_choi-api')->user();
        $lichSuChoi = LuotChoi::where('nguoi_choi_id', $nguoiChoi->id)->orderBy('id', 'DESC')->offset(($request->page - 1) * $request->limit)->limit($request->limit)->get();
        if($lichSuChoi->count() > 0){
            $result = [
                'success' => true,
                'message' => 'Lấy lịch sử chơi thành công!',
                'data' =>  $lichSuChoi
            ];
        }
        else{
            $result = [
                'success' => false,
                'message' => 'Lấy lịch sử chơi thất bại!',
                'data' =>  null
            ];
        }
        return response()->json($result);
    }

    public function bangXepHang(Request $request){
        $bangXepHang = NguoiChoi::orderBy('diem_cao_nhat', 'DESC')->offset(($request->page - 1) * $request->limit)->limit($request->limit)->get();
        if($bangXepHang->count() > 0){
            $result = [
                'success' => true,
                'message' => 'Lấy bảng xếp hạng thành công!',
                'data' =>  $bangXepHang
            ];
        }
        else{
            $result = [
                'success' => false,
                'message' => 'Lấy bảng xếp hạng thất bại!',
                'data' =>  null
            ];
        }
        return response()->json($result);
    }

    public function muaCredit(Request $request){
        $nguoiChoi = auth('nguoi_choi-api')->user();
        $goiCredit = GoiCredit::find($request->goiCreditId);
        //
        $lichSuMuaCredit = new LichSuMuaCredit;
        $lichSuMuaCredit->nguoi_choi_id = $nguoiChoi->id;
        $lichSuMuaCredit->goi_credit_id = $goiCredit->id;
        $lichSuMuaCredit->credit = $goiCredit->credit;
        $lichSuMuaCredit->so_tien = $goiCredit->so_tien;
        $lichSuMuaCredit->save();
        //
        $nguoiChoi->credit = $nguoiChoi->credit + $goiCredit->credit;
        $nguoiChoi->save();
        //
        $result = [
            'success' => true,
            'message' => 'Mua credit thành công!',
            'data' =>  $goiCredit->credit
        ];
        return response()->json($result);
    }
}
