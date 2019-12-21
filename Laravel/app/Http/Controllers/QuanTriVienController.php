<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ThemMoiQuanTriVienRequest;
use App\Http\Requests\DangNhapQuanTriVienRequest;
use App\Http\Requests\DoiTenQuanTriVienRequest;
use App\Http\Requests\DoiMatKhauQuanTriVienRequest;
use App\QuanTriVien;
use Auth;

class QuanTriVienController extends Controller
{
    public function dangNhap(){
        return view('quan-tri-vien.dang-nhap');
    }

    public function xuLyDangNhap(DangNhapQuanTriVienRequest $request){
        $tenDangNhap = $request->ten_dang_nhap;
        $matKhau = $request->mat_khau;
        if(Auth::attempt(['ten_dang_nhap' => $tenDangNhap, 'password' => $matKhau])){
            return redirect()->route('quan-tri-vien.danh-sach');
        }
        $msg = "Tên đăng nhập hoặc mật khẩu không chính xác";
        return view('quan-tri-vien.dang-nhap', compact('msg'));
    }

    public function dangXuat(){
        Auth::logout();
        return redirect()->route('quan-tri-vien.dang-nhap');
    }

    public function trangCaNhan(){
        return view('quan-tri-vien.trang-ca-nhan');
    }

    public function doiTen($id){
        $quanTriVien = QuanTriVien::find($id);
        return view('quan-tri-vien.doi-ten', compact('quanTriVien'));
    }

    public function xuLyDoiTen(DoiTenQuanTriVienRequest $request, $id){
        $hoTen = $request->ho_ten;
        $quanTriVien = QuanTriVien::find($id);
        $quanTriVien->ho_ten = $hoTen;
        $quanTriVien->save();
        return redirect()->route('quan-tri-vien.trang-ca-nhan');
    }

    public function doiMatKhau($id){
        $quanTriVien = QuanTriVien::find($id);
        return view('quan-tri-vien.doi-mat-khau', compact('quanTriVien'));
    }

    public function xuLyDoiMatKhau(DoiMatKhauQuanTriVienRequest $request, $id){
        $matKhauCu = $request->mat_khau_cu;
        $matKhauMoi = $request->mat_khau_moi;
        $quanTriVien = QuanTriVien::find($id);
        //
        if(Auth::attempt(['ten_dang_nhap' => $quanTriVien->ten_dang_nhap, 'password' => $matKhauCu])){
           $quanTriVien->mat_khau = Hash::make($matKhauMoi);
           $quanTriVien->save();
           $msgSuccess = "Đổi mật khẩu thành công";
           return view('quan-tri-vien.doi-mat-khau', compact('quanTriVien', 'msgSuccess'));
        }
        $msgFail = "Mật khẩu cũ không chính xác";
        return view('quan-tri-vien.doi-mat-khau', compact('quanTriVien', 'msgFail'));
    }
    //
    public function index(){
        $quanTriViens = QuanTriVien::all();
        return view('quan-tri-vien.danh-sach', compact('quanTriViens'));
    }

    public function create(){
        return view('quan-tri-vien.form');
    }

    public function store(ThemMoiQuanTriVienRequest $request){
        $tenDangNhap = $request->ten_dang_nhap;
        $matKhau = $request->mat_khau;
        $hoTen = $request->ho_ten;
        $quanTriVien = new QuanTriVien;
        $quanTriVien->ten_dang_nhap = $tenDangNhap;
        $quanTriVien->mat_khau = Hash::make($matKhau);
        $quanTriVien->ho_ten = $hoTen;
        $quanTriVien->save();
        $msg = "Thêm mới quản trị viên thành công";
        return view('quan-tri-vien.form', compact('msg'));
    }

    public function destroy($id){
        $quanTriVien = QuanTriVien::find($id);
        $quanTriVien->delete();
        return redirect()->route('quan-tri-vien.danh-sach');
    }
    //
    public function onlyTrashed(){
        $onlyTrasheds = QuanTriVien::onlyTrashed()->get();
        return view('quan-tri-vien.danh-sach', compact('onlyTrasheds'));
    }

    public function restore($id){
        $quanTriVien = QuanTriVien::onlyTrashed()->find($id);
        $quanTriVien->restore();
        return redirect()->route('quan-tri-vien.thung-rac');
    }

    public function delete($id){
        $quanTriVien = QuanTriVien::onlyTrashed()->find($id);
        $quanTriVien->forceDelete();
        return redirect()->route('quan-tri-vien.thung-rac');
    }
    //
    public function resetPassword($id){
        $quanTriVien = QuanTriVien::find($id);
        $quanTriVien->mat_khau = Hash::make("Laravel is easy!");
        $quanTriVien->save();
        return redirect()->route('quan-tri-vien.danh-sach');
    }
}
