<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return "Selamat Datang";
    }

    public function about() {
        return "NIM: 123456789, Nama: Nama Anda";
    }

    public function articles($id) {
        return "Halaman Artikel dengan ID " . $id;
    }
}
