<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about','about');

Route::get('/product/{category?}',function(string $category = null){
    return 1;
}){};

/*
Route::get('/about', function () {
        return view('about');
});
*/