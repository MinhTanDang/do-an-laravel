<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CapNhatCauHinhAppRequest;
use App\CauHinhApp;

class CauHinhAppController extends Controller
{
    public function index(){
        $cauHinhApp = CauHinhApp::first();
        return view('cau-hinh.cau-hinh-app.cau-hinh-hien-tai', compact('cauHinhApp'));
    }

    public function edit($id){
        $cauHinhApp = CauHinhApp::find($id);
        return view('cau-hinh.cau-hinh-app.form', compact('cauHinhApp'));
    }

    public function update(CapNhatCauHinhAppRequest $request, $id){
        $coHoiSai = $request->co_hoi_sai;
        $thoiGianTraLoi = $request->thoi_gian_tra_loi;
        $cauHinhApp = CauHinhApp::find($id);
        $cauHinhApp->co_hoi_sai = $coHoiSai;
        $cauHinhApp->thoi_gian_tra_loi = $thoiGianTraLoi;
        $cauHinhApp->save();
        return redirect()->route('cau-hinh-app.danh-sach');
    }
}
