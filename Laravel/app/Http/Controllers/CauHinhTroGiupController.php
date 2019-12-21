<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CapNhatCauHinhTroGiupRequest;
use App\CauHinhTroGiup;

class CauHinhTroGiupController extends Controller
{
    public function index(){
        $cauHinhTroGiups = CauHinhTroGiup::all();
        return view('cau-hinh.cau-hinh-tro-giup.cau-hinh-hien-tai', compact('cauHinhTroGiups'));
    }
    public function create(){
        return view('cau-hinh.cau-hinh-tro-giup.form');
    }
    public function store(ThemMoiCauHinhTroGiupRequest $request){
        $loaiTroGiup = $request->loai_tro_giup;
        $thuTu = $request->thu_tu;
        $credit = $request->credit;
        $cauHinhTroGiup = new CauHinhTroGiup;
        $cauHinhTroGiup->loai_tro_giup = $loaiTroGiup;
        $cauHinhTroGiup->thu_tu = $thuTu;
        $cauHinhTroGiup->credit = $credit;
        $cauHinhTroGiup->save();
        $msg = "Thêm mới cấu hình trợ giúp thành công";
        return view('cau-hinh.cau-hinh-tro-giup.form', compact('msg'));
    }

    public function edit($id){
        $cauHinhTroGiup = CauHinhTroGiup::find($id);
        return view('cau-hinh.cau-hinh-tro-giup.form', compact('cauHinhTroGiup'));
    }

    public function update(CapNhatCauHinhTroGiupRequest $request, $id){
        $loaiTroGiup = $request->loai_tro_giup;
        $thuTu = $request->thu_tu;
        $credit = $request->credit;
        $cauHinhTroGiup = CauHinhTroGiup::find($id);
        $cauHinhTroGiup->loai_tro_giup = $loaiTroGiup;
        $cauHinhTroGiup->thu_tu = $thuTu;
        $cauHinhTroGiup->credit = $credit;
        $cauHinhTroGiup->save();
        $msg = "Cập nhật cấu hình trợ giúp thành công";
        return redirect()->route('cau-hinh-tro-giup.danh-sach');
    }
}
