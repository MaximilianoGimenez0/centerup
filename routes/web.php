<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about','about');


/*
Route::get('/about', function () {
        return view('about');
});
*/