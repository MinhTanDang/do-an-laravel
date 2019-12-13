<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NguoiChoi;
class NguoiChoiController extends Controller
{
    public function layDSNguoiChoi(Request $request){
        $dsNguoiChoi = NguoiChoi::all();
        $result = [
            'success' => true,
            'data' => $dsNguoiChoi
        ];
        return response()->json($result);
    }
}
