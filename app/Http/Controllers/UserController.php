<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Repositories\UserRepositories;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
class UserController extends Controller
{
    protected $repo;
    public function __construct(UserRepositories $userRepositories)
    {
        $this->repo = $userRepositories;
    }
    public function userCreate(UserCreateRequest $userCreateRequest)
    {
        
        $user = $this->repo->create($userCreateRequest->validated());
        
        $token = JWTAuth::fromUser($user);

        
        $data = array(
            "status" => 200,
            "message" => "User was successfully created.",
            "data" => $user,
            "token"=>$token
        );
        return response()->json($data);
    }

    public function index()
    {
        $users = $this->repo->getAll();
        $data = array(
            "status" => 200,
            "message" => "The users were found successfully.",
            "data" => $users
        );
        return response()->json($data);
    }
}
