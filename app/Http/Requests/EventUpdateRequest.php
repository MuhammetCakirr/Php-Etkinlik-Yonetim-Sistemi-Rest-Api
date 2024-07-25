<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventUpdateRequest extends FormRequest
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
        $rules=[];
        $rules['id']= "required|exists:events,id";

        if($this->has('title'))
        {
            $rules['title'] = [
                'sometimes',
                'string',
                'min:4',
                'max:50'
            ];
        }
        else if($this->has('description')){
            $rules['description'] = [
                'sometimes',
                'string',
                'min:10',
                'max:100'
            ];
        }
        else if($this->has('event_date')){
            $rules['event_date'] = [
                'sometimes',
                'date',
                'after:today',
                
            ];
        }
        return $rules;
    }

    public function messages():array{
        return [
            "id.required"=>"The event ID field is required.",
            "id.exists"=>"The selected event ID is invalid.",
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
