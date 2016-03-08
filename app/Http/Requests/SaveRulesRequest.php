<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SaveRulesRequest extends Request
{
    /**
     * Determine if the educator is authorized to make this request.
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
            'class_id'=>'required',
            'subject_id'=>'required',
            'teacher_id'=>'required',
        ];
    }
}
