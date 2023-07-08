<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title'         => 'required',
            'date'          => 'required|date',
            'url'           => 'required',
            'client'        => 'required',
            'category_id'   => 'required|integer',
            'description'   => 'required',
            'image1'        => 'required|image',
            'image2'        => 'required|image',
            'image3'        => 'required|image',
        ];
    }
}
