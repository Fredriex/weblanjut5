<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/latihan20',[Controller::class, 'tampilbarang']);
Route::get('/latihan21',[Controller::class, 'tambahbarang']);
Route::post('/latihan22',[Controller::class, 'simpanbarang']);






