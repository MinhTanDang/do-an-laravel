<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CapNhatCauHoiRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'noi_dung' => 'bail|required|unique:cau_hoi,noi_dung,' . $this->id,
            'phuong_an_a' => 'bail|required',
            'phuong_an_b' => 'bail|required',
            'phuong_an_c' => 'bail|required',
            'phuong_an_d' => 'bail|required',
        ];
    }
    public function messages()
    {
        return [
            'noi_dung.required' => 'Vui lòng nhập nội dung',
            'noi_dung.unique' => 'Câu hỏi đã tồn tại',
            'phuong_an_a.required' => 'Vui lòng nhập phương án A',
            'phuong_an_b.required' => 'Vui lòng nhập phương án B',
            'phuong_an_c.required' => 'Vui lòng nhập phương án C',
            'phuong_an_d.required' => 'Vui lòng nhập phương án D',
        ];
    }
}
