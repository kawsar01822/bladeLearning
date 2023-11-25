<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::GET('/',[HomeController::class,'index']);
Route::POST('/calculate',[HomeController::class,'calculate']);
Route::GET('/asset',[HomeController::class,'asset']);
