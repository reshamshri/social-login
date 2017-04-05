<?php

namespace uselaravel\Http\Requests;

use uselaravel\Http\Requests\Request;

class CreateArticleRequest extends Request
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
            'title' => 'required|min:3',
            'body' => 'required',
            'contact_no' => 'required|regex:/[0-9]{10}/',
            'media'       => 'required|mimes:jpeg,png|image',
            'publised_at' => 'date'
        ];
    }
}
//'media'       => 'required|mimes:jpeg,png|image|max:1000',