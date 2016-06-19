<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ShelterRequest extends Request
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
            'shelter_name' => 'required',
            'shelter_address' => 'required',
            'shelter_phone' => 'required'
        ];
    }
}
