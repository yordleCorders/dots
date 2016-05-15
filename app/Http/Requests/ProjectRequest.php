<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProjectRequest extends Request
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
            'name' => 'required',
            'appropriation' => 'required',
            'user_id' => 'required',
            'section_id' => 'required',
            'document_id' => 'required'
            'date_released' => 'required',
            'date_released_as_per_dots' => 'required',
            'date_received' => 'required',
            'date_received_as_per_dots' => 'required',
        ];
    }
}
