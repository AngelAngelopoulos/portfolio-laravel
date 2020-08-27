<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveProjectRequest extends FormRequest
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
            'url' => [
                'required',
                Rule::unique('projects', 'url')->ignore($this->project)],
            'fileUploader' => 'file|required|mimes:jpeg,jpg,png,gif|max:10000',
            'category_id' => ['required', 'exists:categories,id']
        ];
    }
}
