<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CauHoi;
use App\LinhVuc;

class CauHoiControllerAPI extends Controller
{
    //Lấy câu hỏi theo lĩnh vực
    public function layDanhSachTheoLinhVuc(Request $request){
        $cauHois = CauHoi::where('linh_vuc_id', $request->id)->whereNotIn('id', $request->ids)->get();
        if($cauHois->count() > 0){
            $result = [
                'success' => true,
                'message' => "Lấy danh sách câu hỏi thành công!",
                'data' =>$cauHois
            ];
        }
        else{
            $result = [
                'success' => false,
                'message' => "Lấy danh sách câu hỏi thất bại!",
                'data' => null
            ];
        }
        return response()->json($result);

    }
}
