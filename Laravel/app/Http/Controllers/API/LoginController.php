<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /*
    public function dangNhap(Request $request){
        $credentials = [
            'ten_dang_nhap' => $request->ten_dang_nhap,
            'password' => $request->mat_khau
        ];
        //chứng thực
        if(!$token = auth('api')->attempt($credentials)){
            //sai tên đăng nhập hoặc mật khẩu
            return response()->json([
                'status' => false,
                'message' => 'Unauthorized.'
            ],401);
        }

        //chứng thực thành công
        return response()->json([
            'status' => true,
            'message' => 'Authorized.',
            'token' => $token,
            'type' => 'bearer',
            'expires' => auth('api')->factory()->getTTL() * 60
        ], 200);
    }*/

    
}
