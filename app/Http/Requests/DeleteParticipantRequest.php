<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeleteParticipantRequest extends FormRequest
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
            "event_id"=>"required|exists:events,id"
        ];
    }
    public function messages():array{

        return [
            "event_id.required"=>"The event ID field is required.",
            "event_id.exists"=>"The selected event ID is invalid."
        ];
    }
}
