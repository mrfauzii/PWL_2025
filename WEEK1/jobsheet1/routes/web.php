<?php

use Illuminate\Support\Facades\Route; //facade Route untuk mendefinisikan rute URL
use App\Http\Controllers\ItemController; // ItemController untuk menangani permintaan terkait item dan memisahkan logika bisnis dari rute

// Rute untuk halaman utama ("/"), mengembalikan tampilan 'welcome'
Route::get('/', function () {
    return view('welcome'); // Menampilkan view 'welcome.blade.php'
});

// Rute resource untuk CRUD item
Route::resource('items', ItemController::class);
// Route::resource() otomatis membuat rute untuk:
// - GET /items         → index()    (Menampilkan daftar item)
// - GET /items/create  → create()   (Menampilkan form tambah item)
// - POST /items        → store()    (Menyimpan item baru)
// - GET /items/{item}  → show()     (Menampilkan detail item tertentu)
// - GET /items/{item}/edit → edit() (Menampilkan form edit item)
// - PUT/PATCH /items/{item} → update() (Memperbarui item tertentu)
// - DELETE /items/{item} → destroy() (Menghapus item tertentu)
