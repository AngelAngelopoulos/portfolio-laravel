<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/*
 * Esta clase se puede omitir, ya no es necesaria, se deja unicamente por estabilidad
 */

class UpdateProjectRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'url' => 'required',
            'fileUploader' => 'file|mimes:jpeg,jpg,png,gif|max:2000|nullable'
        ];
    }
}
