<x-navbar>
    <div class="text-center mt-12 mb-6">
        <h1 class="text-4xl font-bold">Program Kerja</h1>
        <hr class="mx-auto w-24 border-4 border-amber-400 rounded-2xl mt-2">
    </div>

    @auth
        <div class="flex justify-center mb-10">
            <a href="{{ route('show.addProker') }}"
                class="bg-amber-400 hover:bg-amber-500 text-white font-semibold px-6 py-2 rounded-lg transition hover:scale-105 duration-300">
                + Tambah Proker
            </a>
        </div>
    @endauth

    <div class="space-y-4 max-w-3xl w-full mx-auto px-4 mb-8">
        @foreach ($divisions as $division)
            <h2 class="text-2xl font-bold mt-6 mb-2">{{ $division->name }}</h2>
            <ul class="space-y-4">
                @foreach ($division->prokers as $proker)
                    <li class="flex">
                        <div
                            class="w-full flex flex-wrap items-center justify-between bg-gray-100 px-6 py-4 rounded-xl shadow hover:shadow-md transition">
                            <h3 class="text-lg font-medium text-gray-800 break-words">{{ $proker->name }}</h3>
                            <a href="{{ route('show.Proker', $proker->id) }}"
                                class="bg-amber-400 hover:bg-amber-500 text-white px-4 py-2 rounded-lg transition mt-2 sm:mt-0">
                                Info
                            </a>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endforeach
    </div>
</x-navbar>
