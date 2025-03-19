<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\KategoriDataTable;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }
}


// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

// class KategoriController extends Controller
// {   
//     public function index()
//     {
        //insert data dengan metode QUERY BUILDER
        // $data = [
        //     'kategori_kode' => 'SNK',
        //     'kategori_nama' => 'Snack/Makanan Ringan',
        //     'created_at' => now()
        // ];
        // DB::table('m_kategori')->insert($data);
        // return "Insert data baru berhasil";

        // update data dengan metode QUERY BUILDER
        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update([
        //     'kategori_nama' => 'Camilan'
        // ]);
        // return 'Update data berhasil. Jumlah data yang diupdate: ' . $row . ' baris';

        // delete data dengan metode QUERY BUILDER
        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
        // return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . ' baris';

        // select data dengan metode QUERY BUILDER
//         $data = DB::table('m_kategori')->get();
//         return view('kategori', ['data' => $data]);


//     }
// }
