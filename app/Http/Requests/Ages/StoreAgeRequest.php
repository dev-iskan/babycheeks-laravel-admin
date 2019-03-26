<?php

namespace App\Http\Requests\Ages;

use Illuminate\Foundation\Http\FormRequest;

class StoreAgeRequest extends FormRequest
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
            'age' => 'required|max:250|string'
        ];
    }
}
