<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get( '/main/{value}', [MainController::class, 'index']);


require __DIR__.'/auth.php';
