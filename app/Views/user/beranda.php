<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Padukuhan</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sora:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/output.css">
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">

    <header class="bg-emerald-950 text-white text-center py-4">
        <h1 class="md:text-2xl text-xl font-semibold font-Sora">Padukuhan Klangon</h1>
    </header>

    <nav class="bg-[#026e5a] text-white py-5 shadow-xl">
        <div class="max-w-screen-lg mx-auto flex items-center justify-between">
            <div class="md:hidden ml-auto">
                <button id="menuButton" class="text-white focus:outline-none hover:text-green-400 flex items-center">
                    <svg class="w-12 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                    <span class="mr-2">Menu</span>
                </button>
            </div>
        </div>


        <div id="mobileMenu" class="hidden md:block flex flex-col space-y-2 mt-8 md:mt-1 mx-auto text-center">
            <a href="/" class="hover:text-green-900 text-black py-2 px-3 rounded-2xl bg-slate-50 mx-2 font-Inter transition">Beranda</a>
            <a href="perangkat" class="hover:text-green-900 hover:bg-slate-50 py-2 px-3 rounded-2xl mx-2 font-Inter transition">Perangkat</a>
            <a href="potensi" class="hover:text-green-900 hover:bg-slate-50 py-2 px-3 rounded-2xl mx-2 font-Inter transition">Potensi</a>
            <a href="pengumuman" class="hover:text-green-900 hover:bg-slate-50 py-2 px-3 rounded-2xl mx-2 font-Inter transition">Pengumuman</a>
            <a href="visi-misi" class="hover:text-green-900 hover:bg-slate-50 py-2 px-3 rounded-2xl mx-2 font-Inter transition">Visi-Misi</a>
            <a href="demografi" class="hover:text-green-900 hover:bg-slate-50 py-2 px-3 rounded-2xl mx-2 font-Inter transition">Demografi</a>
        </div>
    </nav>

    <div class="max-w-screen-lg mx-auto mt-8">
        <div class="relative overflow-hidden">
            <div class="flex transition-transform duration-500 ease-in-out" id="carousel">
                <div class="w-full flex-shrink-0">
                    <img src="https://via.placeholder.com/800x400.png?text=1" alt="Slide 1" class="w-full">
                </div>
                <div class="w-full flex-shrink-0">
                    <img src="https://via.placeholder.com/800x400.png?text=2" alt="Slide 2" class="w-full">
                </div>
                <div class="w-full flex-shrink-0">
                    <img src="https://via.placeholder.com/800x400.png?text=3" alt="Slide 3" class="w-full">
                </div>
                <!-- Tambahkan lebih banyak gambar sesuai kebutuhan -->
            </div>
            <button onclick="prevSlide()" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-emerald-700 text-white p-2 rounded-full shadow-md">‹</button>
            <button onclick="nextSlide()" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-emerald-700 text-white p-2 rounded-full shadow-md">›</button>
        </div>
    </div>

    <div class="max-w-screen-lg mx-auto mt-8 px-6">
        <h2 class="text-2xl font-bold text-center font-Poppins"> <span class="text-emerald-700">Gambaran </span>Padukuhan</h2>
        <p class="mt-4 text-justify">Padukuhan Klangon merupakan bagian dari Desa Argosari. Padukuhan Klangon merupakan pusat dari Desa Argosari dengan luas wilayah 79.60 ha. Secara administrasi wilayah Padukuhan Klangon terbagi menjadi 6 Rukun Tetangga/RT. Yaitu RT 007, 008, 009, 010, 011. 012. Di Padukuhan Klangon hampir 48.52 % atau 48.52 ha berupa area pertanian/sawah, dengan33.18 % atau 26.42 ha berupa permukiman. Hal ini menunjukan bahwa pertanian merupakan salah satu sumber pendapatan bagi penduduk Klangon. Aspek kependudukan yang beraneka ragam dengan berbagai macam latar pendidikan, pekerjaan dan usia yang berbeda-beda merupakan faktor yang sangat berperan dalam penyusunan tata ruang desa. berdasarkan dari hasil pemetaan swadaya tahun 2014 jumlah penduduk mencapai 973 jiwa dan 307 KK.</p>
    </div>


    <div class="max-w-screen-lg mx-auto mt-8 flex flex-wrap justify-center">
        <img src="https://via.placeholder.com/400x200.png?text=Gallery+1" alt="Gallery 1" class="m-4 md:rounded-lg shadow-md">
        <img src="https://via.placeholder.com/400x200.png?text=Gallery+2" alt="Gallery 2" class="m-4 md:rounded-lg shadow-md">
        <img src="https://via.placeholder.com/400x200.png?text=Gallery+3" alt="Gallery 3" class="m-4 md:rounded-lg shadow-md">
        <!-- Tambahkan lebih banyak gambar sesuai kebutuhan -->
    </div>




    <div class="shadow-[0_2px_10px_1px_rgba(0,0,0,0.2)] max-w-screen-lg lg:mx-auto md:mx-5 mx-3 my-14 mb-20 px-6 p-5 rounded-md bg-gray-100 outline-emerald-500 outline-2 outline">
        <h2 class="font-Poppins text-2xl font-bold text-center "> <span class="text-emerald-700">Geografis </span>Padukuhan</h2>
        <p class="mt-4 text-justify">Padukuhan Klangon merupakan bagian dari Desa Argosari. Padukuhan Klangon merupakan pusat dari Desa Argosari dengan luas wilayah 79.60 ha. Secara administrasi wilayah Padukuhan Klangon terbagi menjadi 6 Rukun Tetangga/RT. Yaitu RT 007, 008, 009, 010, 011. 012. Di Padukuhan Klangon hampir 48.52 % atau 48.52 ha berupa area pertanian/sawah, dengan33.18 % atau 26.42 ha berupa permukiman. Hal ini menunjukan bahwa pertanian merupakan salah satu sumber pendapatan bagi penduduk Klangon. Aspek kependudukan yang beraneka ragam dengan berbagai macam latar pendidikan, pekerjaan dan usia yang berbeda-beda merupakan faktor yang sangat berperan dalam penyusunan tata ruang desa. berdasarkan dari hasil pemetaan swadaya tahun 2014 jumlah penduduk mencapai 973 jiwa dan 307 KK.</p>

        <!-- Konten lainnya di sini -->
        <!-- Map -->
        <div class="rounded-lg overflow-hidden mt-5">
            <iframe width="100%" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7908.655732118089!2d110.25323039036326!3d-7.647849019473041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7af4b810e9828f%3A0x212c0b97c3133dce!2sKlangan%2C%20Banjaroyo%2C%20Kec.%20Kalibawang%2C%20Kabupaten%20Kulon%20Progo%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1704969721980!5m2!1sid!2sid" allowfullscreen="" loading="lazy" class="w-full h-96"></iframe>
        </div>

    </div>


    <footer class="mt-auto bg-[#014135] text-white py-6 lg:pb-20 lg:pt-24 md:pb-20 md:pt-14 pb-20 pt-10">
        <div class="lg:flex justify-center mx-5 lg:ml-1 ml-16 md:ml-20">


            <div class="flex-wrap justify-center lg:mr-20 mb-7 lg:mb-1 md:mb-5 pb-2 ">
                <h2 class="text-xl font-bold text-white mb-3">Habbatul Qolbi H</h2>
                <p class="text-base text-gray-400">&copy; 2023 Habbatul Qolbi H. All rights reserved.</p>
                <p class="text-base text-gray-400">Kalinegoro, Mertoyudan, Magelang, Jawa Tengah, Indonesia.</p>
            </div>

            <!-- Kontak -->
            <div class="flex-wrap lg:mr-20 lg:mb-1 md:mb-5 mb-8 md:mr-10">
                <h3 class="text-lg font-medium text-white">Kontak</h3>
                <ul>
                    <li>
                        <div class="flex items-center mb-2">
                            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                                <line x1="12" y1="18" x2="12" y2="18"></line>
                            </svg>
                            <span class="ml-2">+62 123 4567 890</span>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 2H2v20h20V2zM2 6l10 7 10-7"></path>
                            </svg>
                            <span class="ml-2">info@padukuhan-klangon.com</span>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Sosial Media -->
            <div class="flex-wrap">
                <h3 class="text-lg font-medium text-white">Sosial Media</h3>
                <ul>
                    <li><a href="https://instagram.com/hq.han?igshid=ZGUzMzM3NWJiOQ==" class="text-gray-300 hover:text-white">Instagram</a></li>
                    <li><a href="https://instagram.com/hq.han?igshid=ZGUzMzM3NWJiOQ==" class="text-gray-300 hover:text-white">Facebook</a></li>
                </ul>
            </div>

        </div>
    </footer>


    <script>
        let currentIndex = 0;

        function showSlide(index) {
            const newTransformValue = -index * 100 + '%';
            document.getElementById('carousel').style.transform = 'translateX(' + newTransformValue + ')';
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % 3; // Ganti angka 3 dengan jumlah total gambar
            showSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + 3) % 3; // Ganti angka 3 dengan jumlah total gambar
            showSlide(currentIndex);
        }

        setInterval(nextSlide, 5000); // Ganti slide setiap 5 detik


        // Tambahkan event listener untuk toggle menu pada tampilan mobile
        const menuButton = document.getElementById('menuButton');
        const mobileMenu = document.getElementById('mobileMenu');

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>

</html>