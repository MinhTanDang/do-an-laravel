<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChiTietLuotChoi;
use App\CauHoi;
use App\LuotChoi;

class ChiTietLuotChoiController extends Controller
{
    public function index(){
        //
        $luotChois = LuotChoi::all();
        $cauHois = CauHoi::all();
        $chiTietLuotChois = ChiTietLuotChoi::whereIn('luot_choi_id', $luotChois->modelKeys())->whereIn('cau_hoi_id', $cauHois->modelKeys())->get();
        return view('chi-tiet-luot-choi.danh-sach', compact('chiTietLuotChois'));
    }

    public function create(){
        //
    }

    public function store(Request $request){
        //
    }

    public function show($id){
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
    public function chiTietLuotChoisById($id){
        $chiTietLuotChoisById = ChiTietLuotChoi::where('luot_choi_id', $id)->get();
        return view('chi-tiet-luot-choi.danh-sach', compact('chiTietLuotChoisById'));
    }
}
