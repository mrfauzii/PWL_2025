<!DOCTYPE html>
<html>
<head>
    <title>Add Item</title>
</head>
<body>
    <h1>Add Item</h1> // Judul halaman form tambah item

    <form action="{{ route('items.store') }}" method="POST"> //Form untuk menyimpan item baru
        @csrf // Token keamanan Laravel untuk mencegah serangan CSRF

        <label for="name">Name:</label> // Label untuk input nama item
        <input type="text" name="name" required> // Input field untuk nama item, wajib diisi
        <br>

        <label for="description">Description:</label> // Label untuk input deskripsi item
        <textarea name="description" required></textarea> // Textarea untuk deskripsi item, wajib diisi
        <br>

        <button type="submit">Add Item</button> // Tombol untuk mengirim form
    </form>

    <a href="{{ route('items.index') }}">Back to List</a> // Link kembali ke daftar item
</body>

</html>
