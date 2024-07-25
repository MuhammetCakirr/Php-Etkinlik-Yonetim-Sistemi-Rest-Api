<?php

namespace App\Repositories;
use App\Models\Comments;
use Illuminate\Support\Facades\Cache;
class CommentRepositories
{
    public function create(array $datas)
    {
        $comment=Comments::create($datas);
        Cache::forget('events_with_comments_and_participants');
        return $comment;
    }

    public function delete(array $datas)
    {
        $comment=Comments::find($datas['id']);
        $comment->delete();
        Cache::forget('events_with_comments_and_participants');
        return true;
    }

    public function update(array $datas)
    {
        $comment=Comments::find($datas['id']);
        unset($datas['id']);
        $comment->update($datas);
        Cache::forget('events_with_comments_and_participants');
        return $comment;
    }

}
