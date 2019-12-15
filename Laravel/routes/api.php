<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('dang_nhap','API\LoginController@dangNhap');

//Lay danh sach linh vuc
Route::get('danh-sach-linh-vuc','API\LinhVucController@layDSLinhVuc');

//Lay danh sach cau hoi theo tung linh vuc
Route::get('danh-sach-cau-hoi/{id}','API\CauHoiController@layDSCauHoiTheoLinhVuc');

//Lay danh sach nguoi choi
Route::get('danh-sach-nguoi-choi','API\NguoiChoiController@layDSNguoiChoi');

//Lay danh sach goi credit
Route::get('danh-sach-goi-credit','API\GoiCreditController@layDSGoiCredit');

//Xu ly dang nhap
Route::post('xu-ly-dang-nhap','API\NguoiChoiController@xuLyDangNhap');
