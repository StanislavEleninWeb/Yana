<?php

namespace App\Http\Requests\Object;

use Illuminate\Foundation\Http\FormRequest;

class StoreObjectPost extends FormRequest
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
            'title' => 'required|min:2|max:191',
            'author' => 'nullable|min:2|max:191',
            'text' => 'required|string|min:2'
        ];
    }
}
