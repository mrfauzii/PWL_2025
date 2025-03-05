<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>
</head>
<body>
    <h1>Edit Item</h1> // Judul utama halaman edit item

    <form action="{{ route('items.update', $item) }}" method="POST"> // Form untuk mengupdate item, mengarah ke route update
        @csrf // Token keamanan Laravel untuk mencegah serangan CSRF
        @method('PUT') // Mengubah metode HTTP menjadi PUT untuk update data

        <label for="name">Name:</label> // Label untuk input nama item
        <input type="text" name="name" value="{{ $item->name }}" required> // Input field nama dengan nilai default dari item
        <br>
        <label for="description">Description:</label> // Label untuk input deskripsi item
        <textarea name="description" required>{{ $item->description }}</textarea> // Textarea dengan nilai default dari item
        <br>
        <button type="submit">Update Item</button> // Tombol untuk mengirim form dan menyimpan perubahan
    </form>

    <a href="{{ route('items.index') }}">Back to List</a> // Link kembali ke daftar item
</body>
</html>
