<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return $this->isMethod('POST') ? $this->onCreate() : $this->onUpdate();
    }


        protected function onCreate() {
            return [
                'fname' => ['required', 'max:255', 'min:3','regex:/^[a-zA-Z]+$/'],
                'lname' => ['required', 'max:255', 'min:3','regex:/^[a-zA-Z]+$/'],
                'email' => ['required', 'email','unique:employees'],
                'ssn' => ['required', 'numeric','unique:employees'],
                'phone' => ['required', 'regex:/^(010|011|012|015)[0-9]{8}$/','unique:employees'],
                'salary' => ['required', 'integer'],
                'department' => ['nullable', 'integer'],
                'photo'=> ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            
    
            ];
        }
            protected function onUpdate() {
                return [
                    'fname' => ['required', 'max:255', 'min:3','regex:/^[a-zA-Z]+$/'],
                    'lname' => ['required', 'max:255', 'min:3','regex:/^[a-zA-Z]+$/'],
                    'email' => ['required', 'email','unique:employees'],
                    'phone' => ['required', 'regex:/^(010|011|012|015)[0-9]{8}$/','unique:employees'],
                    'salary' => ['required', 'integer'],
                    'department' => ['nullable', 'integer'],
        
                ];
            }
    }

