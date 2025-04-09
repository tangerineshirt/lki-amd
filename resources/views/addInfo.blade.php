<x-navbar>
    <div class="text-center mt-12 mb-6">
        <h1 class="text-4xl font-bold">Tambah Berita</h1>
        <hr class="mx-auto w-24 border-4 border-amber-400 rounded-2xl mt-2">
    </div>
    <form method="POST" action="{{ route('addInfo') }}" enctype="multipart/form-data" class="form-layout">
        @csrf
        <label for="title">Judul:</label>
        <input type="text" name="title" id="title" required class="block font-semibold mb-1" value="{{ old('title') }}">

        <label for="content" class="block font-semibold mb-1">Isi:</label>
        <textarea rows="5" id="content" name="content" required class="w-full p-2 bg-blue-100 border rounded">{{ old('content') }}</textarea>

        <label for="image1" class="block font-semibold mb-1">Gambar 1:</label>
        <input type="file" name="image1" id="image1" accept="image/*">

        <label for="image2" class="block font-semibold mb-1">Gambar 2:</label>
        <input type="file" name="image2" id="image2" accept="image/*">

        <label for="image3" class="block font-semibold mb-1">Gambar 3:</label>
        <input type="file" name="image3" id="image3" accept="image/*">

        <button type="submit" class="login">Simpan</button>
    </form>
</x-navbar>
