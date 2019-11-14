<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CapNhatGoiCreditRequest;
use App\Http\Requests\ThemMoiGoiCreditRequest;
use App\GoiCredit;

class GoiCreditController extends Controller
{
    public function index(){
        $goiCredits = GoiCredit::all();
        return view('goi-credit.danh-sach', compact('goiCredits'));
    }

    public function create(){
        return view('goi-credit.form');
    }

    public function store(ThemMoiGoiCreditRequest $request){
        $tenGoi = $request->ten_goi;
        $credit = $request->credit;
        $soTien = $request->so_tien;
        $goiCredit = new GoiCredit;
        $goiCredit->ten_goi = $tenGoi;
        $goiCredit->credit = $credit;
        $goiCredit->so_tien = $soTien;
        $goiCredit->save();
        $msg = "Thêm gói credit thành công";
        return view('goi-credit.form', compact('msg'));
    }

    public function edit($id){
        $goiCredit = GoiCredit::find($id);
        return view('goi-credit.form', compact('goiCredit'));
    }

    public function update(CapNhatGoiCreditRequest $request, $id){
        $tenGoi = $request->ten_goi;
        $credit = $request->credit;
        $soTien = $request->so_tien;
        $goiCredit = GoiCredit::find($id);
        $goiCredit->ten_goi = $tenGoi;
        $goiCredit->credit = $credit;
        $goiCredit->so_tien = $soTien;
        $goiCredit->save();
        $msg = "Cập nhật credit thành công";
        return view('goi-credit.form', compact('msg'));
    }

    public function destroy($id){
        $goiCredit = GoiCredit::find($id);
        $goiCredit->delete();
        return redirect()->route('goi-credit.danh-sach');
    }
    //
    public function onlyTrashed(){
        $onlyTrasheds = GoiCredit::onlyTrashed()->get();
        return view('goi-credit.danh-sach', compact('onlyTrasheds'));
    }

    public function restore($id){
        $goiCredit = GoiCredit::onlyTrashed()->find($id);
        $goiCredit->restore();
        return redirect()->route('goi-credit.thung-rac');
    }

    public function delete($id){
        $goiCredit = GoiCredit::onlyTrashed()->find($id);
        $goiCredit->forceDelete();
        //$linhVuc->truncate();
        return redirect()->route('goi-credit.thung-rac');
    }
}
