<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventCreateRequest;
use App\Http\Requests\EventDeleteRequest;
use App\Http\Requests\EventUpdateRequest;
use App\Repositories\EventRepositories;
use Illuminate\Http\Request;

class EventController extends Controller
{
    protected $repo;

    public function __construct(EventRepositories $eventRepositories){
        $this->repo=$eventRepositories;
    }
    public function CreateEvent(EventCreateRequest $eventCreateRequest)
    {
        $validatedData = $eventCreateRequest->validated();

            
        $validatedData['user_id'] = auth()->id();
    
        $event=$this->repo->create($validatedData);
        $data=array(
            "status" => 200,
            "message" => "Event was successfully created.",
            "data" => $event,
        );

        return response()->json($data);

    }

    public function DeleteEvent(EventDeleteRequest $eventDeleteRequest)
    {
        $event=$this->repo->delete($eventDeleteRequest->validated());
        $data=array(
            "status" => 200,
            "message" => "Event was successfully deleted.",
            
        );

        return response()->json($data);
    }

    public function UpdateEvent(EventUpdateRequest $eventUpdateRequest){
        $event=$this->repo->update($eventUpdateRequest->validated());
        $data=array(
            "status" => 200,
            "message" => "Event was successfully updated.",
            "data" => $event,
        );

        return response()->json($data);
    }

    public function AllEvents()
    {
        $events = $this->repo->getAll();
        // if ($events->from_cache) {
        //     $data = array(
        //         "status" => 200,
        //         "message" => "The events were found successfully.",
        //         "data" => $events
        //     );
           
        // } else {
        //     $data = array(
        //         "status" => 200,
        //         "message" => "The events were found successfully.",
        //         "data" => $events
        //     );
            
        // }

        return response()->json($events);    
    }
}
