<x-navbar>
    <div class="text-center mt-12 mb-6">
        <h1 class="text-4xl font-bold">Tambah Divisi</h1>
        <hr class="line">
    </div>
    <form action="{{ route('addDivision') }}" method="POST" enctype="multipart/form-data" class="form-layout">
        @csrf
        <label for="name" class="block font-semibold mb-1">Nama Divisi:</label>
        <input class="w-full p-2 bg-gray-200 rounded" type="text" name="name" id='name'
            value="{{ old('name') }}" required placeholder="Nama Divisi">
        <label for="image" class="block font-semibold mb-1">Gambar Cover:</label>
        <input type="file" name="image" id="image" accept="image/*" required>
        <label for="description" class="block font-semibold mb-1">Tentang Divisi:</label>
        <textarea rows="5" id="description" name="description" required class="w-full p-2 bg-blue-100 border rounded">{{ old('description') }}</textarea>
        <button type="submit" class="login">Simpan</button>
    </form>
</x-navbar>
