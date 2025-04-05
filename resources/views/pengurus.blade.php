<x-navbar>
    <h1 class="text-6xl justify-self-center m-10 mb-6">Kepengurusan</h1>
    <hr class="justify-self-center w-32 border-4 border-amber-400 rounded-2xl">
    @auth
    <div class="flex justify-center m-8">
        <button class="bg-amber-200 px-4 py-2 rounded hover:scale-110 transition-transform duration-300">
            <a href="">Tambah Pengurus</a>
        </button>
    </div>
    @endauth

    <h1 class="m-8 font-bold">Badan Pengurus Inti</h1>
</x-navbar>