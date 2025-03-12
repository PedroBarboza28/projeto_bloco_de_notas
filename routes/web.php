<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\checkIsLogged;
use App\Http\Middleware\checkIsNotLogged;
use Illuminate\Support\Facades\Route;

// auth routes - user not logged
Route::middleware([checkIsNotLogged::class])->group(function () {
    Route::get("/login", [AuthController::class, "login"])->name('login');  // Defina a rota nomeada
    Route::post("/loginSubmit", [AuthController::class, "loginSubmit"]);

});

// app routes - user logged
Route::middleware([checkIsLogged::class])->group(function () {

    Route::get("/home", [MainController::class, "index"])->name('home');
    Route::get("/newnote", [MainController::class, "newnote"])->name('new');
    Route::get("/logout", [AuthController::class, "logout"])->name('logout');
    Route::post("/newNoteSubmit", [MainController::class, "newNoteSubmit"])->name('newNoteSubmit');


    //edit note
    Route::get("/editNote/{id}", [MainController::class, "editNote"])->name('edit');
    Route::post("/editNoteSubmit", [MainController::class, "editNoteSubmit"])->name('editNoteSubmit');

    //delete note
    Route::get("/deleteNote/{id}", [MainController::class, "deleteNote"])->name('delete');
});

