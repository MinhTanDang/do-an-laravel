<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GoiCredit;

class GoiCreditControllerAPI extends Controller
{
    public function layDanhSach(Request $request){
        $goiCredits = GoiCredit::get();
        if($goiCredits->count() > 0){
            $result = [
                'success' => true,
                'message' => 'Lấy danh sách gói credit thành công!',
                'data' => $goiCredits
            ];
        }
        else{
            $result = [
                'success' => false,
                'message' => 'Lấy danh sách gói credit thất bại!',
                'data' => null
            ];
        }
        return response()->json($result);
    }
}
