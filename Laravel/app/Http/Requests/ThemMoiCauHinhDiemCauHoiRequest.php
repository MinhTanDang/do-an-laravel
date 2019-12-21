<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemMoiCauHinhDiemCauHoiRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'thu_tu' => 'bail|required|unique:cau_hinh_diem_cau_hoi,thu_tu',
            'diem' => 'bail|required',
            'diem' => 'bail|numeric'
        ];
    }
    public function messages()
    {
        return [
            'thu_tu.required' => 'Vui lòng nhập thứ tự câu hỏi',
            'thu_tu.unique' => 'Thứ tự câu hỏi đã tồn tại',
            'diem.required' => 'Vui lòng nhập số điểm',
            'diem.numeric' => 'Điểm phải là số'
        ];
    }
}
