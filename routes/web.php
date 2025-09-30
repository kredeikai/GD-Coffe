<?php

use Illuminate\Support\Facades\Route;

Route::fallback(function () {
    return "Maaf, alamat tidak ditemukan";
});

Route::get('/', function () {
    return view('coffeeshop.home');
});

Route::get('/menu', function () {
    return view('coffeeshop.menu');
});

Route::get('/about', function () {
    return view('coffeeshop.about');
});

Route::get('/contact', function () {
    return view('coffeeshop.contact');
});

Route::get('/program', function () {
    return view('coffeeshop.program');
});
