<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NguoiChoi;
use App\LuotChoi;

class NguoiChoiController extends Controller
{   
    public function index(){
        $nguoiChois = NguoiChoi::all();
        return view('nguoi-choi.danh-sach', compact('nguoiChois'));
    }

    public function create(){
        //
    }

    public function store(Request $request){
      //
    }

    public function edit($id){
        //
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        $nguoiChoi = NguoiChoi::find($id);
        $nguoiChoi->delete();
        return redirect()->route('nguoi-choi.danh-sach');
    }
    //
    public function onlyTrashed(){
        $onlyTrasheds = NguoiChoi::onlyTrashed()->get();
        return view('nguoi-choi.danh-sach', compact('onlyTrasheds'));
    }

    public function restore($id){
        $nguoiChoi = NguoiChoi::onlyTrashed()->find($id);
        $nguoiChoi->restore();
        return redirect()->route('nguoi-choi.thung-rac');
    }

    public function delete($id){
        $nguoiChoi = NguoiChoi::onlyTrashed()->find($id);
        $nguoiChoi->forceDelete();
        //$linhVuc->truncate();
        return redirect()->route('nguoi-choi.thung-rac');
    }
}
