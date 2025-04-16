<?php
 
 namespace Database\Seeders;
 
 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Hash;
 
 class UserSeeder extends Seeder
 {
     /**
      * Run the database seeds.
      */
     public function run(): void
     {
         $data = [
             [
                 'user_id' => 1,
                 'level_id' => 1,
                 'username' => 'admin',
                 'nama' => 'Fauzi',
                 'password' => Hash::make('12345'),
                 'created_at' => now(),
             ],
             [
                 'user_id' => 2,
                 'level_id' => 2,
                 'username' => 'manager',
                 'nama' => 'Hamdan',
                 'password' => Hash::make('12345'),
                 'created_at' => now(),
             ],
             [
                 'user_id' => 3,
                 'level_id' => 3,
                 'username' => 'staff',
                 'nama' => 'Satria',
                 'password' => Hash::make('12345'),
                 'created_at' => now(),
             ],
             
         ];
         DB::table('m_user')->insert($data);
     }
 }