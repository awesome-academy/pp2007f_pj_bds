<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsFromRequest extends FormRequest
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
            "content" => 'required',
            "title" => 'required',
            "type" => 'required',
            "image_link" => 'required',
            "slug" => 'required'
            
        ];
    }
}