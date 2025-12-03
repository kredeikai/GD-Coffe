<?php

use App\Http\Controllers\Admin\AdminMenuController;
// Public Controllers
use App\Http\Controllers\ContactController;
// Admin Controllers
use App\Http\Controllers\Public\PublicMenuController;
use Illuminate\Support\Facades\Route;

Route::fallback(function () {
    return 'Maaf, alamat tidak ditemukan';
});

Route::get('/', function () {
    return view('coffeeshop.home');
});

// Menu publik
Route::get('/menu', [PublicMenuController::class, 'index'])
    ->name('menu.public');

Route::get('/about', function () {
    return view('coffeeshop.about');
});

Route::get('/contact', function () {
    return view('coffeeshop.contact');
});

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');

Route::get('/program', function () {
    return view('coffeeshop.program');
});

Route::prefix('admin')->group(function () {

    // Contacts CRUD (admin)
    Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');
    Route::get('contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::put('contacts/{contact}', [ContactController::class, 'update'])->name('contacts.update');
    Route::delete('contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
    Route::post('contacts/{id}/restore', [ContactController::class, 'restore'])->name('contacts.restore');

    // Menu CRUD (admin)
    Route::resource('menus', AdminMenuController::class);
});
