<x-navbar>
    <div class="text-center mt-12 mb-6">
        <h1 class="text-4xl font-bold">Tambah Gambar Halaman Utama</h1>
        <hr class="line">
    </div>
    <form method="POST" action="{{ route('add.picture') }}" enctype="multipart/form-data" class="form-layout">
        @csrf
        <label for="image1" class="block font-semibold mb-1">Gambar 1:</label>
        <input type="file" name="image1" id="image1" accept="image/*" required>

        <label for="image2" class="block font-semibold mb-1">Gambar 2:</label>
        <input type="file" name="image2" id="image2" accept="image/*" required>

        <label for="image3" class="block font-semibold mb-1">Gambar 3:</label>
        <input type="file" name="image3" id="image3" accept="image/*" required>

        <label for="image4" class="block font-semibold mb-1">Gambar 4:</label>
        <input type="file" name="image4" id="image4" accept="image/*" required>

        <label for="image5" class="block font-semibold mb-1">Gambar 5:</label>
        <input type="file" name="image5" id="image5" accept="image/*" required>

        <button type="submit" class="login">Simpan</button>
    </form>
</x-navbar>