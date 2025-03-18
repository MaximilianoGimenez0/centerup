<?php
//V2
use App\Http\Controllers\articulo_Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    //LLAMANDO A UN RUTA POR SU NOMBRE ASOCIADO
    $url = route('about');
    dd($url);

    return view('welcome');
});

//CON ->name SE PUEDE ASOCIAR UN NOMBRE A UNA RUTA
Route::view('/about','about')->name('about');

Route::get('/articulo/{categoria?}/{id?}',function(string $categoria = null, string $id = null){
    return "Categoría = $categoria | id = $id";
})->name('articulo');

Route::fallback(function(){
    return 'ERROR 404 O.O';
});

Route::get('/sum/{first_num?}/{second_num?}',function(float $first_num = null,float $second_num = null){
    return json_encode(['resultado'=>$first_num+$second_num]);
})->whereNumber(['first_num','second_num']);


Route::get('/test',[articulo_Controller::class,'index']);

/*
Route::get('/products/{category?}',function(string $category=null){
    return "Product for category= $category";
});


//ONLY WORKS IF IT'S A NUMBER! 
Route::get('/product/{id?}',function($id = null){
    return "Product for category= $id";
})->whereNumber('id');

//SOLAMENTE INCLUYE ALGUNOS VALORES POSIBLES
Route::get('/user/{name?}',function($name = null){
    return "Nombre del usuario = $name";
})->whereIn('name',['jorge','juan']);

Route::get('/about', function () {
        return view('about');
});
*/