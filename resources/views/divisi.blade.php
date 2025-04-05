<x-navbar>
    <h1 class="text-6xl justify-self-center m-10 mb-6">Divisi</h1>
    <hr class="justify-self-center w-32 border-4 border-amber-400 rounded-2xl">
    @auth
        <div class="flex justify-center m-8">
            <button class="bg-amber-200 px-4 py-2 rounded hover:scale-110 transition-transform duration-300">
                <a href="{{ route('show.addDivision') }}">Tambah Divisi</a>
            </button>
        </div>
    @endauth
    <ul>
        @foreach ($divisions as $division)
            <li>
                <div class="flex justify-between bg-gray-300 mr-8 ml-8 rounded-lg">
                    <h3>{{$division->name}}</h3>
                    <button class="bg-amber-400 p-4 rounded-lg">
                        <a href="{{route('show.division', $division->id)}}">Info</a>
                    </button>
                </div>
            </li>
        @endforeach
    </ul>
</x-navbar>
