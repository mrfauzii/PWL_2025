<?php

namespace App\Http\Controllers;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use App\DataTables\KategoriDataTable;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        KategoriModel::create([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori,
        ]);

        return redirect('/kategori');
    }

    //tugasjs5
    public function edit($id)
    {
        $data = KategoriModel::findOrFail($id);
        return view('kategori.edit', ['kategori' => $data]);
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'kodeKategori' => 'required',
            'namaKategori' => 'required',
        ]);

        // Cari data berdasarkan ID
        $kategori = KategoriModel::findOrFail($id);

        // Update data
        $kategori->kategori_kode = $request->kodeKategori;
        $kategori->kategori_nama = $request->namaKategori;

        $kategori->save();

    return redirect('/kategori');
    }
    public function delete($id) {
        KategoriModel::where('kategori_id', $id)->delete();
        return redirect('/kategori');
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
