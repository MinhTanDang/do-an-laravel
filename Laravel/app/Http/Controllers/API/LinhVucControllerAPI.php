<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LinhVuc;

class LinhVucControllerAPI extends Controller
{
    public function getAll(){
        $linhVucs = LinhVuc::all();
        if($linhVucs->count() > 0){
            $result = [
                'success' => true,
                'linh_vuc_list' => $linhVucs
            ];
        }
        else{
            $result = [
                'success' => false,
                'linh_vuc_list' => null
            ];
        }
        return json_encode($result);
    }

    public function getElementById($id){
        $linhVuc = LinhVuc::find($id);
        if($linhVuc != null){
            $result = [
                'success' => true,
                'linh_vuc' => $linhVuc->get()
            ];
        }
        else{
            $result = [
                'success' => false,
                'linh_vuc' => null
            ];
        }
        return json_encode($result);
    }
}
