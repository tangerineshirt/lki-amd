<x-navbar>
    <div class="text-center mt-12 mb-6">
        <h1 class="text-4xl font-bold">Tambah Proker</h1>
        <hr class="mx-auto w-24 border-4 border-amber-400 rounded-2xl mt-2">
    </div>
    <form action="{{ route('addProker') }}" method="POST" enctype="multipart/form-data" class="form-layout">
        @csrf
        {{-- nama --}}
        <label for="name" class="block font-semibold mb-1">Nama Program Kerja:</label>
        <input class="w-full p-2 bg-gray-200 rounded" type="text" name="name" id='name'
            value="{{ old('name') }}" required placeholder="Nama Program Kerja">
        
        {{-- tanggal mulai  --}}
        <label for="start" class="block font-semibold mb-1">Mulai Pelaksanaan:</label>
        <input type="date" name="start" id="start" class="w-full p-2 bg-gray-200 rounded" required>

        {{-- tanggal selesai --}}
        <label for="end" class="block font-semibold mb-1">Akhir Pelaksanaan:</label>
        <input type="date" name="end" id="end" class="w-full p-2 bg-gray-200 rounded" required>

        {{-- divisi mana --}}
        <label for="division_id" class="block font-semibold mb-1">Divisi:</label>
        <select name="division_id" required>
            <option value="" disabled selected>Pilih Divisi</option>
            @foreach ($divisions as $division)
                <option value="{{ $division->id }}">{{ $division->name }}</option>
            @endforeach
        </select>

        {{-- gambar --}}
        <label for="image" class="block font-semibold mb-1">Gambar Proker:</label>
        <input type="file" name="image" id="image" accept="image/*">

        {{-- deskripsi --}}
        <label for="description" class="block font-semibold mb-1">Deskripsi:</label>
        <textarea rows="5" id="description" name="description" required 
            class="w-full p-2 bg-blue-100 border rounded">{{ old('description') }}</textarea>
        <button type="submit" class="login">Simpan</button>
    </form>
</x-navbar>
