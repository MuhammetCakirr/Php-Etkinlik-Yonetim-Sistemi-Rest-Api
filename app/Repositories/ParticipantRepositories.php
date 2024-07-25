<?php

namespace App\Repositories;
use App\Models\Participants;
use Illuminate\Support\Facades\Cache;
class ParticipantRepositories
{
    public function join(array $datas)
    {
        $participant=Participants::create(
            $datas
        );
        Cache::forget('events_with_comments_and_participants');
        return $participant;
    }

    public function leave(array $datas){
        $participant = Participants::where("event_id",$datas['event_id']);
        $participant->delete();
        Cache::forget('events_with_comments_and_participants');
        return true;
    }
}
