<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CauHoi;
class CauHoiController extends Controller
{
    public function layDSCauHoiTheoLinhVuc(Request $request, $id){
        $dsCauHoi = CauHoi::find($id)->get();
        $result = [
            'success' => true,
            'data' => $dsCauHoi
        ];
        return response()->json($result);
    }
}
