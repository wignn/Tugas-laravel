<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('tugas1')->group(function(){
    Route::get('/profile/{name?}', function($name){
        return view('tugas-1.user', ['name' => $name]);
    })->name('profile');

    Route::get('/menu', function(){
        return view('tugas-1.menu');
    })->name('menu');

    Route::get('/{name?}', function($name = 'Guest') {
        return 'ini adalah ' . $name;
    });
});


Route::get('/health', function(){
    return "OK";
});