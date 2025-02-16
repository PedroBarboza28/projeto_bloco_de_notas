<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get("/login", [AuthController::class, "login"])->name('login');  // Defina a rota nomeada

Route::get("/logout", [AuthController::class, "logout"]);
