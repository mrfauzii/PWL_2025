<!DOCTYPE html>
<html>
<head>

    <title>Items List</title>
</head>
<body>
    <h1>Items</h1>
    <!-- menampilkan pesan jika sukses -->
    @if(session('success')) 
    <p> {{ session ('success') }}</p>
    @endif
    <!-- link untuk menambahkan item baru -->
    <a href="{{ route('items.create') }}">Add Item</a>
    <ul>
        @foreach ($items as $item) <!-- Looping semua item yang dikirim dari controller -->
            <li>
                {{ $item->name }} - <!-- Menampilkan nama item -->

                <!-- Link untuk mengedit item -->
                <a href="{{ route('items.edit', $item) }}">Edit</a> 

                <!-- Form untuk menghapus item -->
                <form action="{{ route('items.destroy', $item) }}" method="POST" style="display:inline;">
                    @csrf <!-- Token keamanan Laravel untuk mencegah CSRF -->
                    @method('DELETE') <!-- Mengubah metode POST menjadi DELETE -->
                    <button type="submit">Delete</button> <!-- Tombol hapus -->
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>