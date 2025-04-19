<x-navbar>
    <div class="flex items-center justify-center min-h-screen py-10 bg-black/70 bg-blend-multiply" id='bgCarousel'
        style="transition: background-image 1s ease-in-out; background-size: cover; background-position: center;">
        <div class="flex flex-col items-center">
            <h1 class="font-bold text-4xl sm:text-5xl md:text-6xl lg:text-8xl text-white">LKI-AMD</h1>
            <p class="text-white text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl font-semibold text-center px-4">Lembaga Kajian Islam Al-Fatih Muslim Drenalin</p>
        </div>
    </div>
    <script>
        const images = [
            "{{ asset('images/Fotbar_AMD.jpg') }}",
            "{{ asset('images/Fotbar_SAYA.jpg') }}",
            "{{ asset('images/Fotbar_FG.jpg') }}",
            "{{ asset('images/Fotbar_LDF.jpg') }}",
            "{{ asset('images/Fotbar_OH.jpg') }}"
        ];

        let current = 0;
        const bg = document.getElementById("bgCarousel");

        function changeBackground() {
            bg.style.backgroundImage = `url('${images[current]}')`;
            current = (current + 1) % images.length;
        }

        changeBackground(); // initial
        setInterval(changeBackground, 5000); // every 5s
    </script>
    <div class="div-des">
        <img src="../public/images/salam.png" alt="" class="max-w-100 max-h-50">
        <hr class="w-64 border-t-4 border-black my-4 rounded-2xl">
        <div class="p-10">
            <img src="../public/images/hitamPutih.png" alt="" class="float-left w-40 h-auto mr-4">
            <p class="ini-font">
                Lembaga Kajian Islam Al-Fatih Muslim Drenalin (LKI-AMD) merupakan sebuah lembaga dakwah yang ada di
                Fakultas Ilmu Komputer Universitas Brawijaya (FILKOM UB).
                Nama Al-Fatih diambil dari seorang pejuang Islam yaitu Muhammad II bin Murad atau lebih dikenal dengan
                Muhammad Al-Fatih. Sosok pemimpin terbaik yang diramalkan oleh Rasulullah SAW. Al-Fatih Muslim Drenalin
                berusaha mengambil inspirasi dari tokoh ini. Semangat perjuangan kental dalam setiap langkah dan gerak
                Al-Fatih Muslim Drenalin. Muslim Drenalin adalah semangat seorang muslim, yang tidak pernah habis.
                Semangat yang dibangun atas dasar pengabdian seorang hamba kepada Allah subhanahu wa ta'ala.
            </p>
        </div>
    </div>
    {{-- <h1 class="m-8 mt-20 mb-4 text-4xl justify-self-center font-bold ini-font">
        Karakter Kami
    </h1>
    <hr class="line"> --}}
    <div class="karakter bg-gradient-to-bl from-white to-blue-50">
        <h1 class="pt-10 pl-10 text-2xl text-blue-950">
            <b>Shiddiq</b>
        </h1>
        <div class=" flex justify-center items-center p-10 pt-0">
            <img src="../public/images/shiddiq.png" alt="" class="w-30 h-auto mr-4">
            <p>
                Sifat shiddiq adalah salah satu sifat utama yang dimiliki oleh Nabi Muhammad ﷺ, yang berarti jujur atau
                benar dalam perkataan, perbuatan, dan niat. Sejak kecil, beliau sudah dikenal oleh masyarakat Mekah
                sebagai
                orang yang dapat dipercaya, sehingga mendapat gelar Al-Amin (yang terpercaya).
            </p>
        </div>
    </div>

    <div class="karakter bg-gradient-to-br from-white to-blue-50">
        <h1 class="pt-10 pr-16 text-2xl justify-self-end text-blue-950">
            <b>Amanah</b>
        </h1>
        <div class=" flex justify-center items-center p-10 pt-0">
            <p>
                Amanah adalah salah satu sifat utama yang dimiliki oleh Nabi Muhammad ﷺ, yang berarti dapat dipercaya
                dalam menjalankan tugas, menyampaikan wahyu, dan menjaga titipan. Sejak kecil, beliau dikenal sebagai
                pribadi yang jujur dan bertanggung jawab.
            </p>
            <img src="../public/images/amanah.png" alt="" class="w-30 h-auto mr-4">
        </div>
    </div>
    <div class="karakter bg-gradient-to-bl from-white to-blue-50">
        <h1 class="pt-10 pl-10 text-2xl text-blue-950">
            <b>Fathonah</b>
        </h1>
        <div class=" flex justify-center items-center p-10 pt-0">
            <img src="../public/images/fathonah.png" alt="" class="w-30 h-auto mr-4">
            <p>
                Fathonah berarti cerdas, bijaksana, dan memiliki kecerdasan luar biasa dalam berpikir dan bertindak.
                Nabi Muhammad ﷺ memiliki kecerdasan yang tidak hanya terbatas pada ilmu pengetahuan, tetapi juga dalam
                memahami situasi, mengambil keputusan, dan berdakwah dengan strategi yang tepat.
            </p>
        </div>
    </div>
    <div class="karakter bg-gradient-to-br from-white to-blue-50">
        <h1 class="pt-10 pr-16 text-2xl justify-self-end text-blue-950">
            <b>Tabligh</b>
        </h1>
        <div class=" flex justify-center items-center p-10 pt-0">
            <p>
                Tabligh berarti menyampaikan segala wahyu dan ajaran Allah dengan jujur, tanpa menyembunyikan atau
                mengubahnya. Nabi Muhammad ﷺ memiliki tugas utama sebagai utusan Allah untuk menyampaikan Islam kepada
                umat manusia, meskipun menghadapi berbagai rintangan dan ancaman.
            </p>
            <img src="../public/images/tabligh.png" alt="" class="w-30 h-auto mr-4">
        </div>
    </div>
</x-navbar>
