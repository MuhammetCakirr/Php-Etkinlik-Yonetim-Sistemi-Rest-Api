<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventCreateRequest extends FormRequest
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
            "title"=>"string|min:4|max:50",
            "description"=>"string|min:10|max:100",
            "event_date"=>"date|after:today"
        ];
    }
    public function messages():array{
        return [
            "title.string" => "The title must be a string.",
            "title.min" => "The title must be at least 4 characters.",
            "title.max" => "The title may not be greater than 50 characters.",
            "description.string" => "The description must be a string.",
            "description.min" => "The description must be at least 10 characters.",
            "description.max" => "The description may not be greater than 100 characters.",
            "event_date.date" => "The event date is not a valid date.",
            "event_date.after" => "The event date must be a date after today.",
        ];
    }
}
