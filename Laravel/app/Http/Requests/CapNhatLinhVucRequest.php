<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CapNhatLinhVucRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
   
    public function rules()
    {
        return [
            'ten_linh_vuc' => 'bail|required|unique:linh_vuc,ten_linh_vuc,' . $this->id,
        ];
    }

    public function messages()
    {
        return [
            'ten_linh_vuc.required' => 'Vui lòng nhập tên lĩnh vực',
            'ten_linh_vuc.unique' => 'Tên lĩnh vực đã tồn tại'
        ];
    }
}
