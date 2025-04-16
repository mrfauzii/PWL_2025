<?php
 
 namespace Database\Seeders;
 
 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\DB;
 
 class SupplierSeeder extends Seeder
 {
     /**
      * Run the database seeds.
      */
     public function run(): void
     {
         $data = [
             [
                 'supplier_id' => 1,
                 'supplier_kode' => 'S001',
                 'supplier_nama' => 'PT Jayakan',
                 'supplier_alamat' => 'Jl. Kembang No.1',
                 'created_at' => now(),
             ],
             [
                 'supplier_id' => 2,
                 'supplier_kode' => 'S002',
                 'supplier_nama' => 'PT Harapan ',
                 'supplier_alamat' => 'Jl. Bunga No. 2',
                 'created_at' => now(),
             ],
             [
                 'supplier_id' => 3,
                 'supplier_kode' => 'S003',
                 'supplier_nama' => 'PT Trans',
                 'supplier_alamat' => 'Jl. Mawar No. 3',
                 'created_at' => now(),
             ],
             [
                 'supplier_id' => 4,
                 'supplier_kode' => 'S004',
                 'supplier_nama' => 'PT Nusantara',
                 'supplier_alamat' => 'Jl. Melati No. 4',
                 'created_at' => now(),
             ],
             [
                 'supplier_id' => 5,
                 'supplier_kode' => 'S005',
                 'supplier_nama' => 'PT Abadi',
                 'supplier_alamat' => 'Jl. Lavender No. 5',
                 'created_at' => now(),
             ],
             [
                 'supplier_id' => 6,
                 'supplier_kode' => 'S006',
                 'supplier_nama' => 'PT Sumber',
                 'supplier_alamat' => 'Jl. Kamboja No. 6',
                 'created_at' => now(),
             ],
             [
                 'supplier_id' => 7,
                 'supplier_kode' => 'S007',
                 'supplier_nama' => 'PT Kencana',
                 'supplier_alamat' => 'Jl. Tulip No. 7',
                 'created_at' => now(),
             ],
             [
                 'supplier_id' => 8,
                 'supplier_kode' => 'S008',
                 'supplier_nama' => 'PT Langit',
                 'supplier_alamat' => 'Jl. Anggrek No. 8',
                 'created_at' => now(),
             ],
             [
                 'supplier_id' => 9,
                 'supplier_kode' => 'S009',
                 'supplier_nama' => 'PT Cahaya',
                 'supplier_alamat' => 'Jl. Dahlia No. 9',
                 'created_at' => now(),
             ],
             [
                 'supplier_id' => 10,
                 'supplier_kode' => 'S010',
                 'supplier_nama' => 'PT Rezeki',
                 'supplier_alamat' => 'Jl. Teratai No. 10',
                 'created_at' => now(),
             ]
         ];
         DB::table('m_supplier')->insert($data);
     }
 }