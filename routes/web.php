<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\InstitutionController;
use \App\Http\Controllers\UserController;


// Redirect to login if the user visits /
Route::get("/",function(){
    return redirect()->to("login");
});

Auth::routes(["register"=>false]);

// protect routes
Route::middleware("auth")->group(function(){
    Route::view("dashboard","dashboard")->name("dashboard");
    Route::resource("institutions",InstitutionController::class);
    Route::resource("users",UserController::class);
});