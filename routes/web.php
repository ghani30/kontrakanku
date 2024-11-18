<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('home');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/kontrakan', function () {
    return view('kontrakan');
});

Route::get('/kontrakan/single-post', function () {
    return view('single-post');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});


//admin page
Route::get('/admin/', function () {
    return view('/admin/dashboard');
});

Route::get('/admin/data-penyewa', function () {
    return view('/admin/penyewa');
});
