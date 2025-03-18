<?php
//V2


use App\Http\Controllers\articuloController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\mathController;
use Illuminate\Support\Facades\Route;

Route::view(uri: '/about',view: 'about')->name(name: 'about ');

Route::get('/sum/{a}/{b}',[mathController::class,'sum'])->whereNumber(['a','b']);
Route::get('/subtract/{a}/{b}',[mathController::class,'subtract'])->whereNumber(['a','b']);

Route::get('/',[homeController::class,'index'])->name('home');