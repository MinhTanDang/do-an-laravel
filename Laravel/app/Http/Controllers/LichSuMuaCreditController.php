<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lichSuMuaCredit;
use App\NguoiChoi;
use App\GoiCredit;

class LichSuMuaCreditController extends Controller
{
    public function index(){
        //
        $nguoiChois = NguoiChoi::all();
        $goiCredits = GoiCredit::all();
        $lichSuMuaCredits = lichSuMuaCredit::whereIn('nguoi_choi_id', $nguoiChois->modelKeys())->whereIn('goi_credit_id', $goiCredits->modelKeys())->get();
        return view('lich-su-mua-credit.danh-sach', compact('lichSuMuaCredits'));
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
    public function lichSuMuaCreditsById($id){
        $lichSuMuaCreditsById = LichSuMuaCredit::where('nguoi_choi_id', $id)->get();
        return view('lich-su-mua-credit.danh-sach', compact('lichSuMuaCreditsById'));
    }
}
