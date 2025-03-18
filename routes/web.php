<?php
//V2


use App\Http\Controllers\articuloController;
use App\Http\Controllers\mathController;
use Illuminate\Support\Facades\Route;

Route::view(uri: '/about',view: 'about')->name(name: 'about ');

Route::get('/sum/{num1}/{num2}',[mathController::class,'sum'])->whereNumber(['a','b']);
Route::get('/subtract/{num1}/{num2}',[mathController::class,'subtract'])->whereNumber(['a','b']);