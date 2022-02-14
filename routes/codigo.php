<?php


use App\Http\Controllers\HomeController;


Route::get('/', 'HomeController@index');
Route::post('/produto/store', 'ProdutoController@store');

/*
Route::get('/', function(){
    return view('home');

});

Route::get('/', function(){
    return view('produtos');

});



Route::get('/produto/edit/{id}', function(){
    dd('home');

});



Route::post('/produto/store', function(){
    dd('cadastrar');

});
*/