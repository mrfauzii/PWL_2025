<?php
 
 namespace Database\Seeders;
 
 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\DB;
 use Carbon\Carbon;
 
 class SupplierSeeder extends Seeder
 {
     /**
      * Run the database seeds.
      */
     public function run(): void
     {
         $data_supplier = [
             [
                 'supplier_kode' => 'SP001',
                 'supplier_nama' => 'PT Pertamina',
                 'supplier_alamat' => 'Jl. Medan Merdeka Timur No. 1A, Jakarta Pusat',
                 'created_at' => Carbon::now()
             ],
             [
                 'supplier_kode' => 'SP002',
                 'supplier_nama' => 'PT Bank Rakyat Indonesia',
                 'supplier_alamat' => 'Jl. Jenderal Sudirman Kav. 44-46, Jakarta Pusat',
                 'created_at' => Carbon::now()
             ],
             [
                 'supplier_kode' => 'SP003',
                 'supplier_nama' => 'PT Astra International',
                 'supplier_alamat' => 'Jl. Gaya Motor Raya No. 8, Jakarta Utara',
                 'created_at' => Carbon::now()
             ],
         ];
 
         DB::table('m_supplier')->insert($data_supplier);
     }
 }