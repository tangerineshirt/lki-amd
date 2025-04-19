<x-navbar>
    <div class="flex flex-col space-y-6 justify-center items-center px-4 sm:px-8 lg:px-16 py-8">
        <h1 class="font-bold text-3xl sm:text-4xl text-center">{{ $info->title }}</h1>
        <p class="text-gray-700 text-sm sm:text-base">Dipublikasi {{ $info->created_at->format('d M Y') }}</p>
    
        @if ($info->image1)
            <img src="{{ asset('storage/' . $info->image1) }}" alt="{{ $info->title }}"
                class="mt-4 w-full max-w-3xl rounded-2xl object-cover h-auto shadow-md">
        @endif
        @if ($info->image2)
            <img src="{{ asset('storage/' . $info->image2) }}" alt="{{ $info->title }}"
                class="mt-4 w-full max-w-3xl rounded-2xl object-cover h-auto shadow-md">
        @endif
        @if ($info->image3)
            <img src="{{ asset('storage/' . $info->image3) }}" alt="{{ $info->title }}"
                class="mt-4 w-full max-w-3xl rounded-2xl object-cover h-auto shadow-md">
        @endif
    
        <p class="text-base sm:text-lg text-gray-700 leading-relaxed text-justify bg-gray-100 rounded-lg p-6 sm:p-8 shadow-lg w-full max-w-4xl">
            {!! nl2br(e($info->content)) !!}
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
