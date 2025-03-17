<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about','about');

Route::get('/products/{category?}',function(string $category=null){
    return "Product for category= $category";
});

/*
Route::get('/about', function () {
        return view('about');
});
*/