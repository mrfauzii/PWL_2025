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
            ['kategori_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Laptop', 'harga_beli' => 9000000, 'harga_jual' => 10000000],
            ['kategori_id' => 1, 'barang_kode' => 'BRG002', 'barang_nama' => 'Smartphone', 'harga_beli' => 4500000, 'harga_jual' => 5000000],
            ['kategori_id' => 1, 'barang_kode' => 'BRG003', 'barang_nama' => 'Tablet', 'harga_beli' => 6500000, 'harga_jual' => 7000000],
            ['kategori_id' => 2, 'barang_kode' => 'BRG004', 'barang_nama' => 'Jaket', 'harga_beli' => 250000, 'harga_jual' => 300000],
            ['kategori_id' => 2, 'barang_kode' => 'BRG005', 'barang_nama' => 'Celana Jeans', 'harga_beli' => 350000, 'harga_jual' => 400000],
            ['kategori_id' => 3, 'barang_kode' => 'BRG006', 'barang_nama' => 'Mie Instan', 'harga_beli' => 4000, 'harga_jual' => 5000],
            ['kategori_id' => 3, 'barang_kode' => 'BRG007', 'barang_nama' => 'Roti', 'harga_beli' => 15000, 'harga_jual' => 20000],
            ['kategori_id' => 4, 'barang_kode' => 'BRG008', 'barang_nama' => 'Kopi', 'harga_beli' => 10000, 'harga_jual' => 15000],
            ['kategori_id' => 4, 'barang_kode' => 'BRG009', 'barang_nama' => 'Teh', 'harga_beli' => 10000, 'harga_jual' => 12000],
            ['kategori_id' => 5, 'barang_kode' => 'BRG010', 'barang_nama' => 'Piring', 'harga_beli' => 20000, 'harga_jual' => 25000],
        ];

        DB::table('m_barang')->insert($data);
    }
}
