<x-navbar>
    <div class="max-w-4xl mx-auto mt-16 px-6 mb-8">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-4">{{ $division->name }}</h1>
        <hr class="mx-auto w-24 border-4 border-amber-400 rounded-2xl mb-6">
        <p class="text-lg text-gray-700 leading-relaxed text-justify bg-gray-100 rounded-lg p-8 shadow-lg">
            {{ $division->description }}
        </p>
        @auth
            <div class="flex justify-center">
                <form action="{{ route('delete.division', $division->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete my-4">Delete</button>
                </form>
            </div>
        @endauth
    </div>
</x-navbar>