<x-navbar>
    <div class="max-w-4xl mx-auto mt-16 px-6 mb-8">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-4">{{ $division->name }}</h1>
        <hr class="line mb-8">
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
            <div class="flex justify-center">
                <a href="{{ route('showDivision.edit', $division->id) }}">
                    <button class="bg-green-500 p-2 rounded-lg hover:scale-110 transition-transform duration-300">
                        Edit
                    </button>
                </a>
            </div>
        @endauth
    </div>
</x-navbar>
