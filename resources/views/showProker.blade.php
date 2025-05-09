<x-navbar>
    <div class="max-w-4xl mx-auto mt-16 px-6 mb-8">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-4">{{ $proker->name }}</h1>
        <h4 class="time-proker mb-2">Mulai:
            {{ \Carbon\Carbon::parse($proker->start)->format('d M Y') }}</h4>
        <h4 class="time-proker mb-4">Selesai:
            {{ \Carbon\Carbon::parse($proker->end)->format('d M Y') }}</h4>
        <h4 class="time-proker mb-4">
            Divisi: {{ $proker->division->name ?? '-' }}
        </h4>
        <hr class="line mb-8">
        <p class="text-lg text-gray-700 leading-relaxed text-justify bg-gray-100 rounded-lg p-8 shadow-lg">
            {{ $proker->description }}
        </p>
        @if ($proker->image)
            <img src="{{ asset('storage/' . $proker->image) }}" alt="{{ $proker->name }}"
                class="mt-6 w-full max-w-3xl mx-auto rounded-2xl shadow-2xl object-cover h-auto">
        @endif

        @auth
            <div class="flex justify-center">
                <form action="{{ route('delete.proker', $proker->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete my-4">Delete</button>
                </form>
            </div>
        @endauth
    </div>
</x-navbar>
