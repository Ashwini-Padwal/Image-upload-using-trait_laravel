<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('user-list',[UserController::class,'userlist']);
Route::post('/add-user',[UserController::class,'adduser'])->name('user.upload');
