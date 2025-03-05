<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke() {
        return "NIM: 123456789, Nama: Muhammad Reishi Fauzi";
    }
}