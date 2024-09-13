<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            //
            'id' => 'required|unique:students|integer',
            'name' => 'required| regex: /^[\pL\s\-]+$/u |max:100',
            'email' => 'required|unique:students|max:255|email',
            'phone' => 'required|digits:11|unique:students',
            'image' => 'image|mimes:png,jpg',
            'department' => 'integer|max:255|min:1'
            // 'address'  => 'required|min:5',
            //'password' => 'required',
            //gender
        ];
    }
    public function messages()
    {
        return [
            'id.required' => 'please enter your code',
            'id.unique' => 'The code already exists'
        ];
    }
}