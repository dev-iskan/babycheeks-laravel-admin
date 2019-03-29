<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|string|max:250',
            'description' => 'nullable',
            'gender' => 'required',
            'brand_id' => 'nullable',
            'categories' => 'array|required',
            'ages' => 'array|required',
            'images' => 'array|nullable',
            'images.*' => 'image'
        ];
    }
}
