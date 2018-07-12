<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddAccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'ten_tv'=>'unique:accounts,user_name'
        ];
    }
    public function messages(){
        return [
            //
            'ten_tv.unique'=>'tên thành viên đã bị trùng'
        ];
    }
}
