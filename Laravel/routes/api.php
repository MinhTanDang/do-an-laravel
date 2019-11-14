<?php

use Illuminate\Http\Request;

Route::get('/danh-sach-url','API\ControllerAPI@urlList');
//
Route::prefix('linh-vuc')->group(function () {
    Route::get('/danh-sach','API\LinhVucControllerAPI@getAll');
    Route::get('/{id}','API\LinhVucControllerAPI@getElementById');
});

Route::prefix('cau-hoi')->group(function () {
    Route::get('/danh-sach','API\CauHoiControllerAPI@getAll');
    Route::get('/danh-sach/linh-vuc/{id}','API\CauHoiControllerAPI@getElementsByLinhVucId');
    Route::get('/{id}','API\CauHoiControllerAPI@getElementById');
});

Route::prefix('goi-credit')->group(function () {
    Route::get('/danh-sach','API\GoiCreditControllerAPI@getAll');
    Route::get('/{id}','API\GoiCreditControllerAPI@getElementById');
});

Route::prefix('nguoi-choi')->group(function () {
    Route::get('/dang-ky','API\NguoiChoiControllerAPI@register');
    Route::get('/dang-nhap','API\NguoiChoiControllerAPI@login');
    Route::get('/{id}/doi-mat-khau','API\NguoiChoiControllerAPI@repassword');
    //
    Route::get('/xep-hang','API\NguoiChoiControllerAPI@rank');
    Route::get('/{id}/lich-su-luot-choi','API\LuotChoiControllerAPI@history');
});
