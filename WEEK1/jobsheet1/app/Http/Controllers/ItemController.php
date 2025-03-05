<?php

namespace App\Http\Controllers; // Mendeklarasikan namespace untuk ItemController

use App\Models\Item; // Menggunakan model Item untuk berinteraksi dengan database
use Illuminate\Http\Request; // Menggunakan Request untuk menangani input dari pengguna

class ItemController extends Controller
{
    // Method untuk menampilkan daftar semua item
    public function index()
    {
        $items = Item::all(); // Mengambil semua data item dari database
        return view('items.index', compact('items')); // Mengirim data item ke view 'items.index'
    }

    // Method untuk menampilkan form tambah item
    public function create()
    {
        return view('items.create'); // Mengembalikan tampilan form untuk membuat item baru
    }

    // Method untuk menyimpan item baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required', // Validasi bahwa name harus diisi
            'description' => 'required', // Validasi bahwa description harus diisi
        ]);

        // Hanya memasukkan atribut yang diizinkan ke dalam database
        Item::create($request->only(['name', 'description']));

        // Redirect kembali ke daftar item dengan pesan sukses
        return redirect()->route('items.index')->with('success', 'Item created successfully');
    }

    // Method untuk menampilkan detail satu item tertentu
    public function show(Item $item)
    {
        return view('items.show', compact('item')); // Mengirim data item ke view 'items.show'
    }

    // Method untuk menampilkan form edit item
    public function edit(Item $item)
    {
        return view('items.edit', compact('item')); // Mengirim data item ke view 'items.edit'
    }

    // Method untuk memperbarui item yang sudah ada di database
    public function update(Request $request, Item $item)
    {
        $request->validate([
            'name' => 'required', // Validasi bahwa name harus diisi
            'description' => 'required', // Validasi bahwa description harus diisi
        ]);

        // Hanya memasukkan atribut yang diizinkan ke dalam database
        $item->update($request->only(['name', 'description']));

        // Redirect kembali ke daftar item dengan pesan sukses
        return redirect()->route('items.index')->with('success', 'Item updated successfully');
    }

    // Method untuk menghapus item dari database
    public function destroy(Item $item)
    {
        $item->delete(); // Menghapus item dari database

        // Redirect kembali ke daftar item dengan pesan sukses
        return redirect()->route('items.index')->with('success', 'Item deleted successfully');
    }
}
