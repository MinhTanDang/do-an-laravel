<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CapNhatCauHinhAppRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'co_hoi_sai' => 'bail|required||numeric|unique:cau_hinh_app,co_hoi_sai,' . $this->id,
            'thoi_gian_tra_loi' => 'bail|required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'co_hoi_sai.required' => 'Vui lòng nhập cơ hội sai',
            'co_hoi_sai.unique' => 'Cơ hội sai đã tồn tại',
            'co_hoi_sai.numeric' => 'Cơ hội phải là số',
            'thoi_gian_tra_loi.required' => 'Vui lòng nhập thời gian trả lời',
            'thoi_gian_tra_loi.numeric' => 'Thời gian trả lời phải là số'
        ];
    }
}
