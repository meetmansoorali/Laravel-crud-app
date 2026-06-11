<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'show']);
Route::get('/add', [UserController::class, 'showaddpage']);
Route::Post('/submit',[UserController::class, 'add']);
Route::get('/update', [UserController::class, 'update'])->name('update');
