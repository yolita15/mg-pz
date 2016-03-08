<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SaveSubjectRequest extends Request
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
            'subject-name'=>'unique:subjects,name|required|min:3',
        ];
    }
}
