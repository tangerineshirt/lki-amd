<x-navbar>
    <div class="text-center mt-12 mb-6">
        <h1 class="text-4xl font-bold">Berita</h1>
        <hr class="mx-auto w-24 border-4 border-amber-400 rounded-2xl mt-2">
    </div>
    @auth
        <div class="flex justify-center mb-10">
            <a href="{{ route('show.addInfo') }}"
               class="bg-amber-400 hover:bg-amber-500 text-white font-semibold px-6 py-2 rounded-lg transition hover:scale-105 duration-300">
                + Tambah Berita
            </a>
        </div>
    @endauth
    <ul class="space-y-4 max-w-3xl w-full mx-auto px-4 mb-8">
        @foreach ($infos as $info)
            <li class="{{ $loop->last ? 'mr-5' : '' }}">
                <a href="{{ route('show.info', $info->id) }}" class="block">
                    <div class="news">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-1">{{ $info->title }}</h3>
                        <p class="text-sm text-gray-500">{{ $info->created_at->format('d M Y') }}</p>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>    
</x-navbar>
