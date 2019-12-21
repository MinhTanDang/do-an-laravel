<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CauHoi;
use App\LinhVuc;

class CauHoiControllerAPI extends Controller
{
    public function getAll(){
        $cauHois = CauHoi::all();
        if($cauHois->count() > 0){
            $result = [
                'success' => true,
                'cau_hoi_list' => $cauHois
            ];
        }
        else{
            $result = [
                'success' => false,
                'cau_hoi_list' => null
            ];
        }
        return json_encode($result);
    }
    
    public function getElementsByLinhVucId($linhVucId){
        $linhVuc = LinhVuc::find($linhVucId);
        if($linhVuc != null){
            $cauHois = CauHoi::where('linh_vuc_id', $linhVucId);
            if($cauHois->count() > 0){
                $result = [
                    'success' => true,
                    'cau_hoi_list' => $cauHois->get()
                ];
            }
        }
        else{
            $result = [
                'success' => false,
                'cau_hoi_list' => null
            ];
        }
        return json_encode($result);
    }
    
    public function getElementById($id){
        $cauHoi = CauHoi::find($id);
        if($cauHoi != null){
            $result = [
                'success' => true,
                'cau_hoi' => $cauHoi
            ];
        }
        else{
            $result = [
                'success' => false,
                'cau_hoi' => null
            ];
        }
        return json_encode($result);
    }
}
