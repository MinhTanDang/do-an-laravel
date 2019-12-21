<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemMoiQuanTriVienRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ten_dang_nhap' => 'bail|required|unique:quan_tri_vien',
            'mat_khau'  => 'bail|required|min:6|max:32',
            'ho_ten' => 'bail|required'
        ];
    }

    public function messages()
    {
        return[
            'ten_dang_nhap.required' => 'Vui lòng nhập tên đăng nhập',
            'ten_dang_nhap.unique' => 'Tên đăng nhập đã tồn tại',
            'mat_khau.required' => 'Vui lòng nhập mật khẩu',
            'mat_khau.min' => 'Mật khẩu phải từ 6 ký tự trở lên',
            'mat_khau.max' => 'Mật khẩu phải ít hơn 32 ký tự',
            'ho_ten.required' => 'Vui lòng nhập họ tên'
        ];
    }
}
