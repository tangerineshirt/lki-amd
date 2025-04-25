<x-navbar>
    <div class="px-6">
        <div class="text-center mt-12 mb-6">
            <h1 class="text-4xl font-bold">Berita</h1>
            <hr class="line">
        </div>

        @auth
            <div class="flex justify-center mb-10">
                <a href="{{ route('show.addInfo') }}" class="add">
                    + Tambah Berita
                </a>
            </div>
        @endauth

        <section class="max-w-6xl w-full mx-auto px-4 mb-8">
            <ul class="space-y-4">
                @foreach ($infos as $info)
                    <li class="{{ $loop->last ? 'mr-5' : '' }}">
                        <a href="{{ route('show.info', $info->id) }}" class="block">
                            <div class="news gradient-box">
                                <h3 class="text-2xl font-semibold text-gray-800 mb-1">{{ $info->title }}</h3>
                                <p class="text-sm text-gray-500">{{ $info->created_at->format('d M Y') }}</p>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>

            <div class="mt-10 flex-col items-center relative">
                {{ $infos->links('pagination::tailwind') }}
            </div>
        </section>
    </div>
</x-navbar>
