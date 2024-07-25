<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;
class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        
        return [
            'title' => $this->title,
            'description' => $this->description,
            'event_date' => Carbon::parse($this->event_date)->format('l, F j, Y'),
            'comments' => CommentResource::collection($this->whenLoaded('comments')),
            'participants' => UserResource::collection($this->whenLoaded('participants')), 
            // 'from_cache' => $this->from_cache ?? false,
        ];
    }
}
