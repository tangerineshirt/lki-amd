<x-navbar>
    <form action="{{ route('addLeader') }}" method="POST" enctype="multipart/form-data" class="form-layout">
        @csrf
        <label for="name" class="block font-semibold mb-1">Nama Pengurus:</label>
        <input class="w-full p-2 bg-gray-200 rounded" type="text" name="name" id='name'
            value="{{ old('name') }}" required placeholder="Nama Pengurus">

        <label for="rank" class="block font-semibold mb-1">Badan Pengurus:</label>
        <select name="rank" id="rank">
            <option value="Inti">Inti</option>
            <option value="Harian">Harian</option>
        </select>

        <label for="position" class="block font-semibold mb-1">Posisi:</label>
        <select name="position" id="position">
            <option value="Ketua Umum">Ketua Umum</option>
            <option value="Wakil Ketua">Wakil Ketua</option>
            <option value="Sekretaris">Sekretaris</option>
            <option value="Bendahara">Bendahara</option>
            @foreach ($divisions as $division)
                <option value="Ketua {{ $division->name }}">Ketua {{ $division->name }}</option>
            @endforeach
        </select>

        <label for="image" class="block font-semibold mb-1">Gambar Profil:</label>
        <input type="file" name="image" id="image" accept="image/*" required>

        <label for="about" class="block font-semibold mb-1">Tentang:</label>
        <textarea rows="5" id="about" name="about" required class="w-full p-2 bg-blue-100 border rounded">{{ old('about') }}</textarea>
        <button type="submit" class="login">Simpan</button>
    </form>
</x-navbar>