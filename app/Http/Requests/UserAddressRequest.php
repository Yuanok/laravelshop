<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAddressRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'province' => 'required',
            'city' => 'required',
            'district' => 'required',
            'zip' => 'required',
            'address' => 'required',
            'contact_name' => 'required',
            'contact_phone' => 'required',
        ];
    }

    public function messages(){
        return [
            'province.required' => '省 不能为空',
            'city.required' => '市 不能为空',
            'district.required' => '区 不能为空',
            'zip.required' => '邮编 不能为空',
            'address.required' => '地址 不能为空',
            'contact_name.required' => '联系人 不能为空',
            'contact_phone.required' => '电话 不能为空',
        ];
    }
}
