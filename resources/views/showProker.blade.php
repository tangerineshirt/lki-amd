<x-navbar>
    <div class="max-w-4xl mx-auto mt-16 px-6">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-4">{{ $proker->name }}</h1>
        <h4 class="text-xl font-semibold text-center mb-2">Mulai:
            {{ \Carbon\Carbon::parse($proker->start)->format('d M Y') }}</h4>
        <h4 class="text-xl font-semibold text-center mb-4">Selesai:
            {{ \Carbon\Carbon::parse($proker->end)->format('d M Y') }}</h4>
        <h4 class="text-xl font-semibold text-center mb-4">
            Divisi: {{ $proker->division->name ?? '-' }}
        </h4>
        <hr class="mx-auto w-24 border-4 border-amber-400 rounded-2xl mb-6">
        <p class="text-lg text-gray-700 leading-relaxed text-justify bg-gray-100 rounded-lg p-8 shadow-lg">
            {{ $proker->description }}
        </p>
        <img src="{{ asset('storage/' . $proker->image) }}" alt="{{ $proker->name }}"
            class="mt-6 w-full max-w-xl mx-auto rounded-2xl shadow-2xl object-cover aspect-video">
    </div>
</x-navbar>
