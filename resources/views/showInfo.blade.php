<x-navbar>
    <div class="flex flex-col space-y-6 justify-center items-center px-4 sm:px-8 lg:px-16 py-8">
        <h1 class="font-bold text-3xl sm:text-4xl text-center">{{ $info->title }}</h1>
        <p class="text-gray-700 text-sm sm:text-base">Dipublikasi {{ $info->created_at->format('d M Y') }}</p>

        {{-- CKEditor-generated content --}}
        <div class="info-text">
            {!! $info->content !!}
        </div>

        @auth
            <div class="flex justify-center">
                <form action="{{ route('delete.info', $info->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete my-4">Delete</button>
                </form>
            </div>
        @endauth
    </div>
</x-navbar>
