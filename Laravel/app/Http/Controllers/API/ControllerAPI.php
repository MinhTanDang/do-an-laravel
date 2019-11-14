<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ControllerAPI extends Controller
{
    public function urlList(){
        $result = [
            'linh_vuc_list' => '127.0.0.1:8000/api/linh-vuc/danh-sach',
            'linh_vuc' => '127.0.0.1:8000/api/linh-vuc/{id}',
            'cau_hoi_list' => '127.0.0.1:8000/api/cau-hoi/danh-sach',
            'cau_hoi_list_by_linh_vuc_id' => '127.0.0.1:8000/api/cau-hoi/danh-sach/linh-vuc/{id}',
            'cau_hoi' => '127.0.0.1:8000/api/cau-hoi/{id}',
            'goi_credit_list' => '127.0.0.1:8000/api/goi-credit/danh-sach',
            'goi_credit' => '127.0.0.1:8000/api/goi-credit/{id}',
            'register' => '127.0.0.1:8000/api/nguoi-choi/dang-ky',
            'login' => '127.0.0.1:8000/api/nguoi-choi/dang-nhap',
            'repassword' => '127.0.0.1:8000/nguoi-choi/{id}/doi-mat-khau',
            'rank' => '127.0.0.1:8000/nguoi-choi/xep-hang',
            'history' => '127.0.0.1:8000/nguoi-choi/{id}/lich-su-luot-choi'
        ];
        return json_encode($result);
    }
}
