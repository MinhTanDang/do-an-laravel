<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CapNhatCauHinhDiemCauHoiRequest;
use App\CauHinhDiemCauHoi;

class CauHinhDiemCauHoiController extends Controller
{
    public function index(){
        $cauHinhDiemCauHois = CauHinhDiemCauHoi::all();
        return view('cau-hinh.cau-hinh-diem-cau-hoi.cau-hinh-hien-tai', compact('cauHinhDiemCauHois'));
    }

    public function edit($id){
        $cauHinhDiemCauHoi = CauHinhDiemCauHoi::find($id);
        return view('cau-hinh.cau-hinh-diem-cau-hoi.form', compact('cauHinhDiemCauHoi'));
    }

    public function update(CapNhatCauHinhDiemCauHoiRequest $request, $id){
        $thuTu = $request->thu_tu;
        $diem = $request->diem;
        $cauHinhDiemCauHoi = CauHinhDiemCauHoi::find($id);
        $cauHinhDiemCauHoi->thu_tu = $thuTu;
        $cauHinhDiemCauHoi->diem = $diem;
        $cauHinhDiemCauHoi->save();
        return redirect()->route('cau-hinh-diem-cau-hoi.danh-sach');
    }
}
