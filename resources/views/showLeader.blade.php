<x-navbar>
    <div class="w-full px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto my-10 p-6 bg-white rounded-lg shadow-lg text-center">
            <img src="{{ asset('storage/' . $leader->image) }}" alt="{{ $leader->name }}"
                class="mx-auto w-40 h-40 object-cover rounded-full border-4 border-gray-400 mb-6">
    
            <h3 class="text-2xl font-semibold text-gray-800 mb-2">Nama: {{ $leader->name }}</h3>
            <h3 class="text-xl text-gray-700 mb-1">Badan Pengurus {{ $leader->rank }}</h3>
            <h3 class="text-xl text-gray-700 mb-4">Posisi: {{ $leader->position }}</h3>
    
            <p class="text-gray-600">{!! nl2br(e($leader->about)) !!}</p>
        </div>
    </div>
    @auth
        <div class="flex justify-center">
            <form action="{{ route('delete.leader', $leader->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete my-4">Delete</button>
            </form>
        </div>
    @endauth
</x-navbar>
