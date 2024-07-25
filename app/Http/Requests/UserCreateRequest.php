<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            "name"=>"required|min:3|string",
            "email"=>"required|email|min:5|unique:users,email",
            "password"=>"required|min:6"
        ];
    }

    public function messages(): array
    {
        return [
            "name.required" => "The name field is required.",
            "email.required" => "The email field is required.",
            "password.required" => "The password field is required.",
            "name.min" => "The name must be at least 3 characters.",
            "email.min" => "The email must be at least 5 characters.",
            "password.min" => "The password must be at least 6 characters.",
            "name.string" => "The name must be a string.",
            "email.email" => "The email must be a valid email address.",
            "email.unique" => "The email has already been taken.",
        ];
    }
}
