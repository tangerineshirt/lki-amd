<x-navbar>
    <form action="{{ route('division.edit', $division->id) }}" method="POST" enctype="multipart/form-data" class="form-layout">
        @csrf
        @method('PUT')
        <label for="name" class="block font-semibold mb-1">Nama Divisi Baru:</label>
        <input  class="w-full p-2 bg-gray-200 rounded" type="text" name="name" id='name' value="{{ old('name', $division->name) }}" required placeholder="Nama Divisi">
        <label for="description" class="block font-semibold mb-1">Tentang Divisi:</label>
        <textarea
          rows="5"
          id="description" 
          name="description"
          required
          class="w-full p-2 bg-blue-100 border rounded"
        >{{ old('description', $division->description)}}</textarea>
        <button type="submit" class="login">Simpan</button>
    </form>
</x-navbar>