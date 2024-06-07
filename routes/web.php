<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/entrar', function(){
    return view('signin');
});

Route::get('/cadastrar', function(){
    return view('signup');
});


require __DIR__.'/auth.php';
