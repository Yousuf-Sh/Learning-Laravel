<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('Welcome');
Route::get('/hello',function(){
    return "Hello World";
})->name('helloW');
Route::get('/greet/{id}', function($id){
    return 'Hello, ' . $id . ' User!';
});
Route::get('/greet', function(){
    return redirect() ->route('Welcome');
});
Route::fallback(function(){
    return redirect()->route('helloW');
});
