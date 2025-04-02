<!DOCTYPE html>
<html lang=""{{ str_replace('_', '-', app()->getLocale()) }}"">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKI-AMD</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Indie+Flower&family=Lateef:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="bg-gradient-to-r from-blue-400 to-blue-900 p-0.25 w-full shadow-2xl">
        <div class="flex h-20 mx-6 my-1 justify-between items-center">
            <img class="my-2 h-16" src="../public/images/Logo_LKI-AMD.png" alt="Logo LKI-AMD">
            <ul class="flex gap-4 justify-center">
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <a href="">Program Kerja</a>
                </li>
                <li>
                    <a href="">Kepengurusan</a>
                </li>
                <li>
                    <a href="">Visi</a>
                </li>
                <li>
                    <a href="">Misi</a>
                </li>
            </ul>
            <button class="btn">
                <a href="">Admin</a>
            </button>
        </div>
    </nav>
    <main>
        {{ $slot }}
    </main>
</body>

</html>
