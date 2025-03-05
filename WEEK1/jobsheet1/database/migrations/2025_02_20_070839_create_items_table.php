<?php //menandakan ini file PHP

use Illuminate\Database\Migrations\Migration; 
//Mengimpor kelas Migration, yang merupakan dasar untuk semua migrasi database di Laravel. Migration adalah skrip php untuk mengelola struktur database(membuat, mengubah, menghapus tabel)
use Illuminate\Database\Schema\Blueprint;
//Mengimpor kelas Blueprint, yang digunakan untuk mendefinisikan struktur tabel. memodifikasi kolom dalam tabel tanpa harus menulis SQL langsung
use Illuminate\Support\Facades\Schema;
//memanipulasi database, menjalankan operasi database

return new class extends Migration //Membuat dan mengembalikan kelas anonim yang mewarisi Migration
{
    public function up(): void //membuat tabel
    {
        Schema::create('items', function (Blueprint $table) {
            //buat tabel baru 
            $table->id(); //kolom baru seterusnya
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });
    }

  
    public function down(): void //mengahpus tabel
    {
        Schema::dropIfExists('items');
    }
};
