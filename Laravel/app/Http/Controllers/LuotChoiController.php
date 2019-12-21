<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LuotChoi;
use App\NguoiChoi;

class LuotChoiController extends Controller
{
    public function index(){
        $nguoiChois = NguoiChoi::all();
        $luotChois = LuotChoi::whereIn('nguoi_choi_id', $nguoiChois->modelKeys())->get();
        return view('luot-choi.danh-sach', compact('luotChois'));
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
       //
    }
    //
    public function onlyTrashed(){
       
    }

    public function restore($id){
       //
    }

    public function delete($id){
       //
    }
    //
    public function luotChoisById($id){
        $luotChoisById = LuotChoi::where('nguoi_choi_id', $id)->get();
        return view('luot-choi.danh-sach', compact('luotChoisById'));
    }
}
