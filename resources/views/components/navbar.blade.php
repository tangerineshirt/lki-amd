<!DOCTYPE html>
<html lang=""{{ str_replace('_', '-', app()->getLocale()) }}"">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKI-AMD</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="bg-gradient-to-r from-blue-400 to-blue-900 p-0.25 w-full shadow-2xl">
        <div class="flex h-20 mx-6 my-1 justify-between items-center">
            <img class="my-2 h-16" src="../public/images/Logo_LKI-AMD.png" alt="Logo LKI-AMD">
            <ul class="flex gap-4 justify-center">
                <li class="navs">
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li class="navs">
                    <a href="{{route('divisi')}}">Divisi</a>
                </li>
                <li class="navs">
                    <a href="{{route('proker')}}">Program Kerja</a>
                </li>
                <li class="navs">
                    <a href="{{route('pengurus')}}">Kepengurusan</a>
                </li>
                <li class="navs">
                    <a href="{{route('visi')}}">Visi</a>
                </li>
                <li class="navs">
                    <a href="{{route('misi')}}">Misi</a>
                </li>
            </ul>
            @guest
            <button class="btn">
                <a href="{{route('show.Admin')}}">Admin</a>
            </button>
            @endguest
            @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn">Logout</button>
            </form>
            @endauth
        </div>
    </nav>
    <main>
        {{ $slot }}
    </main>

</body>

</html>
