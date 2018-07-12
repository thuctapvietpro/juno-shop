<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditAttributeRequest extends FormRequest
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
            'ten_tt'=>'unique:attributes,att_name,'.$this->segment(4).',att_id',
            'gt'=>'unique:attribute_values,att_value,'.$this->segment(4).',att_value_id'
        ];
    }
}
