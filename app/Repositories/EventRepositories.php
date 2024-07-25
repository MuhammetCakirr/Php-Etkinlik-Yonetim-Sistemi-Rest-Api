<?php

namespace App\Repositories;

use App\Models\Events;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use App\Http\Resources\EventResource;
class EventRepositories
{
    public function create(array $datas)
    {

        $event = Events::create($datas);
        Cache::forget('events_with_comments_and_participants');
        return $event;
    }
    public function delete(array $datas)
    {
        $event = Events::find($datas['id']);
        $event->delete();
        return true;
    }
    public function update(array $datas)
    {
        $event = Events::find($datas['id']);
        unset($datas['id']);
        $event->update($datas);
        Cache::forget('events_with_comments_and_participants');
        return $event;
    }

    public function getAll()
    {
        $cacheKey = 'events_with_comments_and_participants';
        $cacheTime = 60 * 60;

        if (Cache::has($cacheKey)) {
            $events = Cache::get($cacheKey);
            
            $events->from_cache = true;
            $fromCache = true;
            
            Log::info('Events data retrieved from cache.');
    
        } else {
            
            $events = Events::with(['comments.user', 'participants'])->get();
            $events->from_cache = false;
            $fromCache = false;
            Cache::put($cacheKey, $events, $cacheTime);
            Log::info('Events data retrieved from database.');
        }

        $events->each(function($event) use ($fromCache) {
            $event->from_cache = $fromCache;
        });
    
        
        return EventResource::collection($events);
    }
}
