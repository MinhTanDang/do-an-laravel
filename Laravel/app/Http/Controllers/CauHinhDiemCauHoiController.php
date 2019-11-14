<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHinhDiemCauHoi;

class CauHinhDiemCauHoiController extends Controller
{
    public function index(){
        $cauHinhDiemCauHois = CauHinhDiemCauHoi::all();
        return view('cau-hinh.cau-hinh-diem-cau-hoi.cau-hinh-hien-tai', compact('cauHinhDiemCauHois'));
    }

    public function create(){
        //
    }

    public function store(Request $request){
       //
    }

    public function edit($id){
        $cauHinhDiemCauHoi = CauHinhDiemCauHoi::find($id);
        return view('cau-hinh.cau-hinh-diem-cau-hoi.form', compact('cauHinhDiemCauHoi'));
    }

    public function update(Request $request, $id){
        $thuTu = $request->thu_tu;
        $diem = $request->diem;
        $cauHinhDiemCauHoi = CauHinhDiemCauHoi::find($id);
        $flag = CauHinhDiemCauHoi::where('thu_tu', $thuTu)->where('diem', $diem)->doesntExist();
        //
        if($flag){
            $cauHinhDiemCauHoi->update(['thu_tu' => $thuTu]);
        }
        return redirect()->route('cau-hinh-diem-cau-hoi.danh-sach');
    }

    public function destroy($id){
        //
    }
    //
    public function onlyTrashed(){
        //
    }

    public function restore($id){
       //
    }

    public function delete($id){
       //
    }
}
