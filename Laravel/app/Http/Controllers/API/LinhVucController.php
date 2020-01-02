<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LinhVuc;

class LinhVucControllerAPI extends Controller
{
    //Lấy danh sách lĩnh vực
    public function layDanhSach(){
        $dsLinhVuc = LinhVuc::get();
        if($dsLinhVuc->count() > 0){
            $result = [
                'success' => true,
                'message' => "Lấy danh sách lĩnh vực thành công!",
                'data' => $dsLinhVuc,
            ];
        }
        else{
            $result = [
                'success' => false,
                'message' => "Lấy danh sách lĩnh vực thất bại!",
                'data' => null
            ];
        }
        return response()->json($result);
    }
}
