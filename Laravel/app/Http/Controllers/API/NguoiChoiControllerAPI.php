<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NguoiChoi;

class NguoiChoiControllerAPI extends Controller
{
    //register
    //login
    //repassword
    public function rank(){
        $nguoiChois = NguoiChoi::orderBy('diem_cao_nhat', 'desc')->take(10);
        if($nguoiChois->count() > 0){
            $result = [
                'success' => true,
                'nguoi_choi_rank' => $nguoiChois->get()
            ];
        }
        else{
            $result = [
                'success' => false,
                'nguoi_choi_rank' => null
            ];
        }
        return json_encode($result);
    }
}
