<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LinhVuc;
class LinhVucController extends Controller
{
    public function layDSLinhVuc(Request $request){
        $dsLinhVuc = LinhVuc::all();
        $result = [
            'success' => true,
            'data' => $dsLinhVuc
        ];
        return response()->json($result);
    }
}
