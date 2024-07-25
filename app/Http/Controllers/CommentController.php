<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentCreateRequest;
use App\Http\Requests\CommentDeleteRequest;
use App\Http\Requests\CommentUpdateRequest;
use App\Repositories\CommentRepositories;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $repo;
    public function __construct(CommentRepositories $commentRepositories)
    {
        $this->repo=$commentRepositories;
    }
    public function CreateComment(CommentCreateRequest $commentCreateRequest){
        $validatedData = $commentCreateRequest->validated();
        $validatedData['user_id'] = auth()->id();
        $comment=$this->repo->create($validatedData);
        $data=array(
            "status" => 200,
            "message" => "Comment was successfully created.",
            "data" => $comment,
        );
        return response()->json($data);
    }
    public function DeleteComment(CommentDeleteRequest $commentDeleteRequest){
        $validatedData = $commentDeleteRequest->validated();
        $validatedData['user_id'] = auth()->id();
        $comment=$this->repo->delete($validatedData);
        $data=array(
            "status" => 200,
            "message" => "Comment was successfully deleted.",
            
        );
        return response()->json($data);
    }

    public function UpdateComment(CommentUpdateRequest $commentUpdateRequest)
    {
        $validatedData = $commentUpdateRequest->validated();
        $comment=$this->repo->update($validatedData);
        $data=array(
            "status" => 200,
            "message" => "Comment was successfully deleted.",
            "data"=>$comment
            
        );
        return response()->json($data);
    }
}
