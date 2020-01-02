<?php

use Illuminate\Http\Request;
Route::middleware(['jwt.auth'])->group(function(){
    Route::put('/cap-nhat-tai-khoan','API\NguoiChoiControllerAPI@capNhat');
    Route::get('/linh-vuc','API\LinhVucControllerAPI@layDanhSach');
    Route::get('/cau-hoi','API\CauHoiControllerAPI@layDanhSachTheoLinhVuc');
    Route::post('/luu-luot-choi','API\NguoiChoiControllerAPI@luuLuotChoi');
    Route::get('/lich-su-choi','API\NguoiChoiControllerAPI@layLichSuChoi');
    Route::get('/bang-xep-hang','API\NguoiChoiControllerAPI@bangXepHang');
    Route::get('/goi-credit','API\GoiCreditControllerAPI@layDanhSach');
    Route::post('/mua-credit','API\NguoiChoiControllerAPI@muaCredit');
});

Route::post('/dang-ky','API\NguoiChoiControllerAPI@dangKy');
Route::post('/dang-nhap','API\NguoiChoiControllerAPI@dangNhap');
Route::post('/quen-mat-khau','API\NguoiChoiControllerAPI@quenMatKhau');
