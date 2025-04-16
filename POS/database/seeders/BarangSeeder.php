<?php
 
 namespace Database\Seeders;
 
 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\DB;
 
 class BarangSeeder extends Seeder
 {
     /**
      * Run the database seeds.
      */
     public function run(): void
     {
         $data = [
             [
                 'barang_id' => 1,
                 'kategori_id' => 1,
                 'barang_kode' => 'MKN001',
                 'barang_nama' => 'Nasi Ayam',
                 'harga_beli' => 10000,
                 'harga_jual' => 15000,
                 'created_at' => now(),
             ],
             [
                 'barang_id' => 2,
                 'kategori_id' => 1,
                 'barang_kode' => 'MKN002',
                 'barang_nama' => 'Indomie Goreng',
                 'harga_beli' => 5000,
                 'harga_jual' => 10000,
                 'created_at' => now(),
             ],
             [
                 'barang_id' => 3,
                 'kategori_id' => 2,
                 'barang_kode' => 'MNM001',
                 'barang_nama' => 'Es Jeruk',
                 'harga_beli' => 3000,
                 'harga_jual' => 5000,
                 'created_at' => now(),
             ],
             [
                 'barang_id' => 4,
                 'kategori_id' => 2,
                 'barang_kode' => 'MNM002',
                 'barang_nama' => 'Es Teh',
                 'harga_beli' => 2000,
                 'harga_jual' => 5000,
                 'created_at' => now(),
             ],
             [
                 'barang_id' => 5,
                 'kategori_id' => 3,
                 'barang_kode' => 'PKN001',
                 'barang_nama' => 'Kemeja',
                 'harga_beli' => 40000,
                 'harga_jual' => 60000,
                 'created_at' => now(),
             ],
             [
                 'barang_id' => 6,
                 'kategori_id' => 3,
                 'barang_kode' => 'PKN002',
                 'barang_nama' => 'Celana',
                 'harga_beli' => 70000,
                 'harga_jual' => 100000,
                 'created_at' => now(),
             ],
             [
                 'barang_id' => 7,
                 'kategori_id' => 4,
                 'barang_kode' => 'ATK001',
                 'barang_nama' => 'Pulpen',
                 'harga_beli' => 3000,
                 'harga_jual' => 5000,
                 'created_at' => now(),
             ],
             [
                 'barang_id' => 8,
                 'kategori_id' => 4,
                 'barang_kode' => 'ATK002',
                 'barang_nama' => 'Buku Tulis',
                 'harga_beli' => 3000,
                 'harga_jual' => 5000,
                 'created_at' => now(),
             ],
             [
                 'barang_id' => 9,
                 'kategori_id' => 5,
                 'barang_kode' => 'MIN001',
                 'barang_nama' => 'Monopoli',
                 'harga_beli' => 20000,
                 'harga_jual' => 30000,
                 'created_at' => now(),
             ],
             [
                 'barang_id' => 10,
                 'kategori_id' => 5,
                 'barang_kode' => 'MIN002',
                 'barang_nama' => 'Congklak',
                 'harga_beli' => 30000,
                 'harga_jual' => 40000,
                 'created_at' => now(),
             ],
         ];
         DB::table('m_barang')->insert($data);
     }
 }