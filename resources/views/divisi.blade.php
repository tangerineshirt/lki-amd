<x-navbar>
    <div class="text-center mt-12 mb-6">
        <h1 class="text-4xl font-bold">Divisi</h1>
        <hr class="line">
    </div>

    @auth
        <div class="flex justify-center mb-10">
            <a href="{{ route('show.addDivision') }}"
               class="add">
                + Tambah Divisi
            </a>
        </div>
    @endauth

    <ul class="max-w-3xl w-full space-y-4 mx-auto px-4 mb-8">
        @foreach ($divisions as $division)
            <li class="flex {{ $loop->last ? 'mr-5' : '' }}">
                <div class="listDiv">
                    <h3 class="text-lg font-medium text-gray-800 break-words">{{ $division->name }}</h3>
                    <a href="{{ route('show.division', $division->id) }}"
                       class="bg-amber-400 hover:bg-amber-500 text-white px-4 py-2 rounded-lg transition mt-2 sm:mt-0">
                        Info
                    </a>
                </div>
            </li>
        @endforeach
    </ul>
</x-navbar>
