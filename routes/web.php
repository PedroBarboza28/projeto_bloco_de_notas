<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\checkIsLogged;
use Illuminate\Support\Facades\Route;

// auth routes
Route::get("/login", [AuthController::class, "login"])->name('login');  // Defina a rota nomeada
Route::post("/loginSubmit", [AuthController::class, "loginSubmit"]);

Route::middleware([checkIsLogged::class])->group(function () {

    Route::get("/", [MainController::class, "index"]);
    Route::get("/newnote", [MainController::class, "newnote"]);
    Route::get("/logout", [AuthController::class, "logout"])->name('logout');

});
