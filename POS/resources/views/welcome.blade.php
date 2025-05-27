@extends('layouts.template')

@section('content')
    <style>
        .card {
            background-color: #f0f0f0;  /* Ubah warna latar belakang card */
        }
        .card-header {
            background-color: #4CAF50;  /* Ubah warna latar belakang header */
            color: white;  /* Mengubah warna teks header menjadi putih */
        }
        .card-body {
            background-color: #4CAF50;  /* Ubah warna latar belakang header */
            color: #333;  /* Mengubah warna teks di dalam card */
        }
    </style>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Halo, apakabar guyss!!!</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            Selamat datang, ini adalah halaman utama dari web ini.
        </div>
    </div>
@endsection
