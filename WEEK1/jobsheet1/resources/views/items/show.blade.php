<!DOCTYPE html>
<html>
<head>
    <title>Item List</title>
</head>
<body>
    <h1>Items</h1> // Judul utama halaman daftar item
    @if(session('success')) // Mengecek apakah ada pesan sukses yang tersimpan dalam session
        <p>{{ session('success') }}</p> // Menampilkan pesan sukses jika ada
    @endif
    <a href="{{ route('items.create') }}">Add Item</a> // Link untuk menambahkan item baru
    <ul>
        @foreach ($items as $item) // Melakukan looping untuk menampilkan semua item
            <li>
                {{ $item->name }} - // Menampilkan nama item
                <a href="{{ route('items.edit', $item) }}">Edit</a> // Link untuk mengedit item
                <form action="{{ route('items.destroy', $item) }}" method="POST" style="display:inline;"> 
                    // Form untuk menghapus item, menggunakan metode POST
                    @csrf // Token keamanan Laravel untuk mencegah serangan CSRF
                    @method('DELETE') // Mengubah metode POST menjadi DELETE karena HTML tidak mendukung DELETE langsung
                    <button type="submit">Delete</button> // Tombol untuk menghapus item
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
