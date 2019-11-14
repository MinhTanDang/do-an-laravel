<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemMoiGoiCreditRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
   
    public function rules()
    {
        return [
            'ten_goi' => 'bail|required|unique:goi_credit',
            'credit' => 'bail|required',
            'so_tien' => 'bail|required'

        ];
    }

    public function messages()
    {
        return [
            'ten_goi.required' => 'Vui lòng nhập tên gói',
            'ten_goi.unique' => 'Gói credit đã tồn tại',
            'credit.required' => 'Vui lòng nhập credit',
            'so_tien.required' => 'Vui lòng nhập số tiền'
        ];
    }
}
