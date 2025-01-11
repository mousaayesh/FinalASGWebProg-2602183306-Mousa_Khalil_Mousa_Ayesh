<?php

use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PenggunaController::class,'index']);
Route::get('/notification', function () {
    return view('notification',[
        'title' => 'notification'
    ]);
});
Route::get('/wallet', function () {
    return view('wallet',[
        'title' => 'wallet'
    ]);
});
Route::get('/user/{id}',[PenggunaController::class,'show']);
