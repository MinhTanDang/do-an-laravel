<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LuotChoi;

class LuotChoiControllerAPI extends Controller
{
    public function history($nguoiChoiId){
        $luotChois = LuotChoi::where('nguoi_choi_id', $nguoiChoiId);
        if($luotChois->exists()){
            $result = [
                'success' => true,
                'luot_choi_history' => $luotChois->orderBy('id', 'desc')->take(10)->get()
            ];
        }
        else{
            $result = [
                'success' => false,
                'luot_choi_history' => null
            ];
        }
        return json_encode($result);
    }
}
