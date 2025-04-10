<x-navbar>
    <div class="text-center mt-12 mb-6">
        <h1 class="text-4xl font-bold">Kepengurusan</h1>
        <hr class="line">
    </div>

    @auth
        <div class="flex justify-center mb-10">
            <a href="{{ route('show.addLeader') }}"
                class="add">
                + Tambah Pengurus
            </a>
        </div>
    @endauth

    <h1 class="m-8 font-bold text-4xl">Badan Pengurus Inti</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 px-8">
        @foreach ($intiLeaders as $intileader)
            <a href="{{ route('show.leader', $intileader->id) }}">
                <div class="bg-gray-100 p-6 rounded-xl shadow hover:shadow-lg transition flex-col justify-items-center h-full">
                    <div class="w-48 h-64 flex items-center justify-center">
                        <img src="{{ asset('storage/' . $intileader->image) }}" alt="{{ $intileader->name }}"
                            class="max-h-full object-contain rounded-lg mb-4">
                    </div>
                    <h3 class="text-xl font-semibold">{{ $intileader->name }}</h3>
                    <p class="text-gray-600">{{ $intileader->position }}</p>
                </div>
            </a>
        @endforeach
    </div>

    <h1 class="m-8 font-bold text-4xl mt-16">Badan Pengurus Harian</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 px-8 mb-8">
        @foreach ($harianLeaders as $harianLeader)
            <a href="{{ route('show.leader', $harianLeader->id) }}">
                <div class="bg-gray-100 p-6 rounded-xl shadow hover:shadow-lg transition flex-col justify-items-center h-full">
                    <div class="w-48 h-64 flex items-center justify-center">
                        <img src="{{ asset('storage/' . $harianLeader->image) }}" alt="{{ $harianLeader->name }}"
                            class="max-h-full object-contain rounded-lg mb-4">
                    </div>
                    <h3 class="text-xl font-semibold">{{ $harianLeader->name }}</h3>
                    <p class="text-gray-600">{{ $harianLeader->position }}</p>
                </div>
            </a>
        @endforeach
    </div>
</x-navbar>
