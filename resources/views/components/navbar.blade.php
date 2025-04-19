<!DOCTYPE html>
<html lang=""{{ str_replace('_', '-', app()->getLocale()) }}"">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKI-AMD</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="ini-font relative">
    <nav>
        <div class="flex h-12 mx-6 my-1 justify-between items-center">
            <img class="my-2 h-8" src="{{ asset('images/putihHitam.png') }}" alt="Logo LKI-AMD">

            {{-- Hamburger Button --}}
            <button id="hamburger" class="block md:hidden text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <ul class="hidden md:flex gap-4 justify-center">
                @include('components.nav-links')
            </ul>
            <div class="hidden md:block">
                @guest
                    <a href="{{ route('show.Admin') }}">
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
            <!-- Mobile Sidebar -->
            <div id="sidebar"
                class="fixed top-0 left-0 h-full w-64 bg-gray-900 text-white transform -translate-x-full transition-transform duration-300 z-50">
                <div class="p-4">
                    <!-- Close button -->
                    <button id="closeSidebar" class="mb-4 text-white focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <ul class="flex flex-col gap-4">
                        @include('components.nav-links')
                    </ul>

                    <div class="mt-6">
                        @guest
                            <a href="{{ route('show.Admin') }}">
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
                </div>
            </div>
            <!-- Overlay -->
            <div id="overlay" class="fixed inset-0 bg-black opacity-50 hidden z-40"></div>
        </div>
    </nav>
    <main class="overflow-x-hidden flex-1 pt-12">
        {{ $slot }}
    </main>
    <footer class=" bg-blue-950 bg-blend-color p-0.25 w-full">
        <div class="flex h-20 mx-6 my-1 justify-between items-center">
            <p class="text-white ini-font">© 2025 LKI-AMD</p>
            <div class="flex justify-between items-center">
                <img src="{{ asset('images/ub.png') }}" alt="Logo UB" class="h-16">
                <img src="{{ asset('images/filkom.png') }}" alt="Logo FILKOM" class="h-16">
            </div>
        </div>
    </footer>
</body>

</html>
