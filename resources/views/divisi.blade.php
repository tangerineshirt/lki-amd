<x-navbar>
    <div class="text-center mt-12 mb-6">
        <h1 class="text-4xl font-bold">Divisi</h1>
        <hr class="line">
    </div>

    @auth
        <div class="flex justify-center mb-10">
            <a href="{{ route('show.addDivision') }}"
               class="add">
                + Tambah Divisi
            </a>
        </div>
    @endauth

    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 px-8 mb-8">
        @foreach ($divisions as $division)
            <a href="{{ route('show.division', $division->id) }}">
                <div class="gradient-box p-6 rounded-xl shadow-md hover:shadow-lg transition flex-col justify-items-center h-full">
                    <div class="w-48 h-64 flex items-center justify-center">
                        <img src="{{ asset('storage/' . $division->image) }}" alt="{{ $division->name }}"
                            class="max-h-full object-contain rounded-lg mb-4">
                    </div>
                    <h3 class="text-xl font-semibold">{{ $division->name }}</h3>
                </div>
            </a>
        @endforeach
    </div>
</x-navbar>
