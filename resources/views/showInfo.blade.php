<x-navbar>
    <div class=" flex flex-col space-y-3 justify-center items-center mx-auto m-8">
        <h1 class="font-bold text-4xl mx-32 my-8">{{ $info->title }}</h1>
        <p class="text-gray-700">Dipublikasi {{ $info->created_at->format('d M Y') }}</p>
        @if ($info->image1)
            <img src="{{ asset('storage/' . $info->image1) }}" alt="{{ $info->title }}"
                class="mt-6 max-w-3xl mx-auto rounded-2xl object-cover">
        @endif
        @if ($info->image2)
            <img src="{{ asset('storage/' . $info->image2) }}" alt="{{ $info->title }}"
                class="mt-6 max-w-3xl mx-auto rounded-2xl object-cover">
        @endif
        @if ($info->image3)
            <img src="{{ asset('storage/' . $info->image3) }}" alt="{{ $info->title }}"
                class="mt-6 max-w-3xl mx-auto rounded-2xl object-cover">
        @endif
        <p class="text-lg text-gray-700 leading-relaxed text-justify bg-gray-100 rounded-lg p-8 shadow-lg mx-8">
            {{ $info->content }}
        </p>
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
