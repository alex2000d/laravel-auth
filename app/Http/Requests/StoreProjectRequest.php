<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name_project' => 'required|max:255',
            'description' => 'required|max:255',
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'github' => 'required|max:255',

        ];
    }
}
