<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteParticipantRequest;
use App\Http\Requests\ParticipantRequest;
use App\Repositories\ParticipantRepositories;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    protected $repo;
    public function __construct(ParticipantRepositories $participantRepositories){
        $this->repo=$participantRepositories;
    }
    public function joinEvent (ParticipantRequest $participantRequest)
    {
        $validatedData = $participantRequest->validated();
        $validatedData['user_id'] = auth()->id();
        $join=$this->repo->join($validatedData);
        $data=array(
            "status" => 200,
            "message" => "You have successfully participated in the event.",
            "data" => $join,
        );
        return response()->json($data);
    }

    public function leaveEvent (DeleteParticipantRequest $participantRequest)
    {
        $validatedData = $participantRequest->validated();
        $leave=$this->repo->leave($validatedData);
        $data=array(
            "status" => 200,
            "message" => "You left the event successfully.",
        );
        return response()->json($data);
    }
}
