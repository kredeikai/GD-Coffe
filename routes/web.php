<?php

use Illuminate\Support\Facades\Route;

// Route::get('/hello', function () {
//     return view('hello');
// });

Route::get('/mahasiswa/{nama}', function ($nama) {
return "Tampilkan data mahasiswa bernama $nama";
});

Route::get('/stok_barang/{jenis?}/{merek?}', function ($a = 'smartphone', $b = 'samsung') {
    return "Cek sisa stok untuk $a $b";
});

Route::get('/user/{id}', function ($id){
    return "Tampilkan user dengan id = $id";
})->where('id', '[0-9]+');

Route::get('/user/{id}', function ($id){
    return "Tampilkan user dengan id = $id";
})->where('id', '[A-Z]{2}[0-9]+');

Route::get('/hubungi-kami', function () {
    return '<h1>Hubungi Kami</h1>';
});

Route::redirect('/contact-us', '/hubungi-kami');

Route::prefix('admin')->group(function () {
    Route::get('/mahasiswa', function () {
        return "<h1>Daftar Mahasiswa</h1>";
    });

    Route::get('/dosen', function () {
        return "<h1>Daftar Dosen</h1>";
    });

    Route::get('/karyawan', function () {
        return "<h1>Daftar Karyawan</h1>";
    });
});

Route::fallback(function () {
    return "Maaf, alamat tidak ditemukan";
});

Route::get('/buku/{a}', function($a){
    return "Bukuke-$a";
})->where('a', '[0-9]+'); // angka saja

Route::get('/buku/{b}', function($b){
    return "Bukusayake-$b";
})->where('b', '[A-Za-z]+'); // huruf saja

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
