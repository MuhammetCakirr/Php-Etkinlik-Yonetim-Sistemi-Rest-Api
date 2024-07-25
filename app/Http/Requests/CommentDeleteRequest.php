<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentDeleteRequest extends FormRequest
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
            "id"=>"required|exists:comments,id"
        ];
    }
    public function messages():array{
        return [
            "id.required"=>"The comment ID field is required.",
            "id.exists"=>"The selected comment ID is invalid."
        ];
    }
}
