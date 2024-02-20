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

<div class="sticky top-0 z-50">
        <nav id="navbar" class="bg-[#026e5a] text-white py-3 relative h-fit shadow-[0_2px_10px_4px_rgba(0,0,0,0.2)]">
            <div class="flex justify-between">
                <h1 class="animate-slide-down md:text-2xl text-lg font-medium font-Poppins my-auto ml-3 md:ml-8">Padukuhan <span class="text-emerald-400">Klangon</span></h1>
                <div class="flex items-center justify-between">
                    <div class="lg:hidden ml-auto">
                        <button id="menuButton" class="text-white focus:outline-none hover:text-green-400 flex items-center">
                            <svg class="w-12 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                            </svg>
                            <span class="mr-2">Menu</span>
                        </button>
                    </div>
                </div>
               <div id="mobileMenu" class="hidden lg:block absolute lg:relative bottom-0 translate-y-full lg:translate-y-0 left-0 w-full lg:w-fit -z-10 lg:z-20 lg:pr-7 shadow-[0_4px_6px_-1px_rgba(0,0,0,0.4)] lg:shadow-none animate-dissolve-in lg:animate-none">
                    <div class="flex flex-col lg:flex-row space-y-2 lg:space-y-0 pt-8 lg:pt-0 text-center bg-[#026e5a] pb-5 lg:pb-0 lg:transition-opacity">
                        <a href="/" class="hover:underline decoration-4 underline-offset-8 decoration-emerald-400 py-1 px-2 rounded-lg mx-2 font-Inter">Beranda</a>
                        <a href="perangkat" class="hover:underline decoration-4 underline-offset-8 decoration-emerald-400 py-1 px-2 rounded-lg mx-2 font-Inter">Perangkat</a>
                        <a href="potensi" class="text-white underline decoration-4 underline-offset-8 decoration-emerald-400 font-semibold py-1 px-2 rounded-lg  mx-2 font-Inter">Potensi</a>
                        <a href="pengumuman" class="hover:underline decoration-4 underline-offset-8 decoration-emerald-400 py-1 px-2 rounded-lg mx-2 font-Inter">Pengumuman</a>
                        <a href="visi-misi" class="hover:underline decoration-4 underline-offset-8 decoration-emerald-400 py-1 px-2 rounded-lg mx-2 font-Inter">Visi-Misi</a>
                        <a href="demografi" class="hover:underline decoration-4 underline-offset-8 decoration-emerald-400 py-1 px-2 rounded-lg mx-2 font-Inter">Demografi</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>



    <!-- Isian disini -->
    <div class="max-w-screen-xl mx-auto">
        <div class="max-w-full p-6 flex justify-center items-center">
            <section class="mb-4 mt-4">
                <h2 class="md:text-3xl text-2xl font-bold mb-4 text-center font-Poppins"><span class="text-emerald-700">Potensi</span> Padukuhan</h2>
                <p class="text-justify lg:mx-60 md:mx-8 mx-5">Padukuhan Klangon memiliki berbagai potensi yang dapat dijelajahi. Berikut adalah objek wisata dan produk unggulan yang dapat ditemui di Padukuhan Klangon:</p>
            </section>
        </div>
        <section class="mb-28 mx-4">
            <ul class="list-disc">

                <div class="flex flex-wrap mt-4">
                    <div class="my-auto mx-auto">
                        <p class="font-bold text-xl mb-2 font-Poppins"><span class="text-emerald-700">PDAM</span> Klangon</p>
                        <p class="text-justify max-w-xl lg:max-w-lg">PDAM Klangon bukan hanya penyedia air utama, tetapi juga destinasi eksklusif dengan pemandangan luar biasa. Dari rooftop, warga dapat menikmati panorama gunung Merapi-Merbabu, sungai, dan kebun tebu yang hijau. Terdapat keindahan matahari terbit dan sungai Progo yang meliuk-liuk. Tempat ini juga sering dijadikan arena senam, menggabungkan keindahan alam dan kesehatan dalam satu tempat. Selamat datang di PDAM Klangon, di mana alam dan kesejahteraan bertemu.</p>
                    </div>
                    <img src="<?= base_url('galeri-klangon/pdam2.jpg'); ?>" alt="Gallery 2" class="object-cover object-center md:rounded-lg shadow-md mx-auto mt-5 md:w-[600px] md:h-[400px]">
                </div>

                <div class="flex flex-wrap-reverse mt-16">
                <img src="<?= base_url('galeri-klangon/olahan-durian.jpg'); ?>" alt="Gallery 2" class="object-cover object-center md:rounded-lg shadow-md mx-auto mt-5 md:w-[600px] md:h-[400px]">
                    <div class="my-auto mx-auto">
                        <p class="font-bold text-xl mb-2 font-Poppins"><span class="text-emerald-700">Produk Olahan</span> Durian</p>
                        <p class="text-justify max-w-xl lg:max-w-lg">KWT Klangon Happy menjadi pusat kreativitas kuliner dengan fokus utama pada pengolahan produk olahan durian. Dengan dedikasi yang tinggi, mereka menghasilkan beragam produk mulai dari soto kembang durian yang lezat hingga keripik kulit durian yang renyah. Bakso pongge, keripik pongge, pancake durian, es krim durian, dan geblek kulit durian juga menjadi sajian istimewa yang tersedia. KWT Klangon Happy tidak hanya memanfaatkan daging buah durian, tetapi juga kulit durian, pongge, dan bunga buah durian untuk menciptakan variasi produk yang unik dan menarik. Produk tersebut dipasarkan di Toko PanganKu dan Pasar Tani.</p>
                    </div>
                </div>
            </ul>
        </section>
    </div>


    <!-- footer -->
    <footer class="mt-auto bg-[#014135] text-white py-6 lg:pb-20 lg:pt-24 md:pb-20 md:pt-14 pb-20 pt-10">
        <div class="lg:flex justify-center mx-5 lg:ml-1 ml-16 md:ml-20">


            <div class="flex-wrap justify-center lg:mr-20 mb-7 lg:mb-1 md:mb-5 pb-2 ">
                <h2 class="text-xl font-bold text-white mb-3">Padukuhan Klangon</h2>
                <p class="text-base text-gray-400">&copy; 2023 Habbatul Qolbi H. All rights reserved.</p>
                <p class="text-base text-gray-400">Klangon, Banjaroyo, Kalibawang, Kulon Progo, Yogyakarta.</p>
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
                    <li><a href="#" class="text-gray-300 hover:text-white">Instagram</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Facebook</a></li>
                </ul>
            </div>

        </div>
    </footer>


    <script>
        // Tambahkan event listener untuk toggle menu pada tampilan mobile
        const menuButton = document.getElementById('menuButton');
        const mobileMenu = document.getElementById('mobileMenu');

    //jalankan task setelah animasi selesai
    var kondisi = true;

    mobileMenu.addEventListener("animationend", (event) => {
        if (!kondisi) {
                mobileMenu.classList.add('hidden');
                console.log("test");
        }
    });

    menuButton.addEventListener('click', () => {
        if (mobileMenu.classList.contains('hidden')) {
            kondisi = true
            mobileMenu.classList.remove('animate-dissolve-out');
            mobileMenu.classList.add('animate-dissolve-in');
            mobileMenu.classList.remove('hidden');
        } else {
            kondisi = false;
            mobileMenu.classList.remove('animate-dissolve-in');
            mobileMenu.classList.add('animate-dissolve-out');
        }
    });
    </script>

</body>

</html>