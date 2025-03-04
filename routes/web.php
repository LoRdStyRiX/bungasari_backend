<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.login' , ['type_menu' => 'dashboard']);
});

Route::get('home', function () {
    return view('pages.dashboard' , ['type_menu' => 'dashboard']);
})->name('home');


// Route::get('/login', function () {
//     return view('pages.auth.login' , ['type_menu' => 'dashboard']);
// })->name('login');

// Route::get('/register', function () {
//     return view('pages.auth.register' , ['type_menu' => 'dashboard']);
// })->name('register');