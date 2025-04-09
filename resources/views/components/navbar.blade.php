<!DOCTYPE html>
<html lang=""{{ str_replace('_', '-', app()->getLocale()) }}"">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKI-AMD</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav>
        <div class="flex h-12 mx-6 my-1 justify-between items-center">
            <img class="my-2 h-8" src="{{ asset('images/putihHitam.png') }}" alt="Logo LKI-AMD">
            <ul class="flex gap-4 justify-center">
                <li>
                    <a href="{{url('/')}}" class="relative group text-sm font-semibold text-white pb-1">
                        Home
                        <span class="absolute left-1/2 bottom-0 w-0 h-0.5 bg-amber-400 transition-all duration-300 group-hover:left-0 group-hover:w-full"></span>
                    </a>
                </li>
                <li>
                    <a href="{{route('divisi')}}" class="relative group text-sm font-semibold text-white pb-1">
                        Divisi
                        <span class="absolute left-1/2 bottom-0 w-0 h-0.5 bg-amber-400 transition-all duration-300 group-hover:left-0 group-hover:w-full"></span>
                    </a>
                </li>
                <li>
                    <a href="{{route('proker')}}" class="relative group text-sm font-semibold text-white pb-1">
                        Program Kerja
                        <span class="absolute left-1/2 bottom-0 w-0 h-0.5 bg-amber-400 transition-all duration-300 group-hover:left-0 group-hover:w-full"></span>
                    </a>
                </li>
                <li>
                    <a href="{{route('pengurus')}}" class="relative group text-sm font-semibold text-white pb-1">
                        Kepengurusan
                        <span class="absolute left-1/2 bottom-0 w-0 h-0.5 bg-amber-400 transition-all duration-300 group-hover:left-0 group-hover:w-full"></span>
                    </a>
                </li>
                <li>
                    <a href="{{route('visi')}}" class="relative group text-sm font-semibold text-white pb-1">
                        Visi
                        <span class="absolute left-1/2 bottom-0 w-0 h-0.5 bg-amber-400 transition-all duration-300 group-hover:left-0 group-hover:w-full"></span>
                    </a>
                </li>
                <li>
                    <a href="{{route('misi')}}" class="relative group text-sm font-semibold text-white pb-1">
                        Misi
                        <span class="absolute left-1/2 bottom-0 w-0 h-0.5 bg-amber-400 transition-all duration-300 group-hover:left-0 group-hover:w-full"></span>
                    </a>
                </li>
                <li>
                    <a href="{{route('info')}}" class="relative group text-sm font-semibold text-white pb-1">
                        Berita
                        <span class="absolute left-1/2 bottom-0 w-0 h-0.5 bg-amber-400 transition-all duration-300 group-hover:left-0 group-hover:w-full"></span>
                    </a>
                </li>
            </ul>
            @guest
            <a href="{{route('show.Admin')}}">
                <p class="admin">Admin</p>
            </a>
            @endguest
            @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="admin">Logout</button>
            </form>
            @endauth
        </div>
    </nav>
    <main class="overflow-x-hidden flex-1 pt-12">
        {{ $slot }}
    </main>
    <footer class=" bg-blue-950 bg-blend-color p-0.25 w-full">
        <div class="flex h-20 mx-6 my-1 justify-between items-center">
            <p class="text-white">© 2025 LKI-AMD</p>
            <div class="flex justify-between items-center">
                <img src="{{asset('images/ub.png')}}" alt="Logo UB" class="h-16">
                <img src="{{asset('images/filkom.png')}}" alt="Logo FILKOM" class="h-16">
            </div>
        </div>
    </footer>
</body>

</html>
