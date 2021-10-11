<?php

use Illuminate\Support\Facades\Route; 

Route::prefix('admin')->middleware('theme:admin')->name('admin')->group(function (){
    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'store']);
});