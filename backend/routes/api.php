<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::post('/register',function(){ return 'test ok';});
Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);
