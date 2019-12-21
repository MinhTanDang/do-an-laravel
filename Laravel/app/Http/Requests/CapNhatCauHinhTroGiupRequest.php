<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CapNhatCauHinhTroGiupRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
   
    public function rules()
    {
        return [
            'loai_tro_giup' => 'bail|required|unique:cau_hinh_tro_giup,loai_tro_giup,' . $this->id,
            'thu_tu' => 'bail|required|numeric|unique:cau_hinh_tro_giup,thu_tu,' . $this->id,
            'credit' => 'bail|required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'loai_tro_giup.required' => 'Vui lòng nhập loại trợ giúp',
            'loai_tro_giup.unique' => 'Loại trợ giúp đã tồn tại',
            'thu_tu.required' => 'Vui lòng nhập thứ tự',
            'thu_tu.unique' => 'Thứ tự đã tồn tại',
            'thu_tu.numeric' => 'Thứ tự phải là số',
            'credit.required' => 'Vui lòng nhập credit',
            'credit.numeric' => 'Credit phải là số'
        ];
    }
}
