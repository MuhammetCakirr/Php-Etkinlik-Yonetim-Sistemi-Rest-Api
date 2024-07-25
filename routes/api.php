<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* Auth Operations */
Route::post("Login",[AuthController::class,"login"]);
Route::middleware("auth:api")->get("Logout",[AuthController::class,"logout"]);

/* User Operations */
Route::middleware("auth:api")->get("GetAll",[UserController::class,"index"]);
Route::post("CreateUser",[UserController::class,"userCreate"]);

/* Event Operation */
Route::middleware("auth:api")->post("CreateEvent",[EventController::class,"CreateEvent"]);
Route::middleware("auth:api")->post("DeleteEvent",[EventController::class,"DeleteEvent"]);
Route::middleware("auth:api")->put("UpdateEvent",[EventController::class,"UpdateEvent"]);
Route::middleware("auth:api")->get("AllEvents",[EventController::class,"AllEvents"]);

/* Comment Operations */
Route::middleware("auth:api")->post("CreateComment",[CommentController::class,"CreateComment"]);
Route::middleware("auth:api")->post("DeleteComment",[CommentController::class,"DeleteComment"]);
Route::middleware("auth:api")->put("UpdateComment",[CommentController::class,"UpdateComment"]);

/* Participants Operations */
Route::middleware("auth:api")->post("JoinEvent",[ParticipantController::class,"joinEvent"]);
Route::middleware("auth:api")->post("LeaveEvent",[ParticipantController::class,"leaveEvent"]);
