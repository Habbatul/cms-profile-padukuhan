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
                        <a href="perangkat" class="text-white underline decoration-4 underline-offset-8 decoration-emerald-400 font-semibold py-1 px-2 rounded-lg  mx-2 font-Inter">Perangkat</a>
                        <a href="potensi" class="hover:underline decoration-4 underline-offset-8 decoration-emerald-400 py-1 px-2 rounded-lg mx-2 font-Inter">Potensi</a>
                        <a href="pengumuman" class="hover:underline decoration-4 underline-offset-8 decoration-emerald-400 py-1 px-2 rounded-lg mx-2 font-Inter">Pengumuman</a>
                        <a href="visi-misi" class="hover:underline decoration-4 underline-offset-8 decoration-emerald-400 py-1 px-2 rounded-lg mx-2 font-Inter">Visi-Misi</a>
                        <a href="demografi" class="hover:underline decoration-4 underline-offset-8 decoration-emerald-400 py-1 px-2 rounded-lg mx-2 font-Inter">Demografi</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="text-3xl text-slate-700 text-center mb-7 md:mb-10 mt-8 font-bold font-Poppins mx-8"><span class="text-emerald-700">Perangkat</span> Padukuhan</div>

    <!-- nanti fetch disini -->
    <div class="flex items-center justify-center mx-5 md:mx-16 mb-20">
    <div class="flex flex-wrap justify-center max-w-7xl">
        <!-- fetch disini -->
        <?php foreach ($perangkatData as $row) : ?>
        <div class="max-w-xs rounded-lg overflow-hidden shadow-[0_2px_10px_1px_rgba(0,0,0,0.2)] m-5  bg-white">
        
            <?php if (empty($row['url-photo']) || $row['url-photo'] == 'placeholder') : ?>
            <div class="aspect-w-1 aspect-h-1 flex items-center justify-center">
                <img class="w-72 max-w-72 min-w-72 h-72 object-cover" src="https://via.placeholder.com/288x288.png?text=Foto" alt="Foto">
            </div>

            <?php else : ?>
            <div class="aspect-w-1 aspect-h-1 flex items-center justify-center">
                <img class="w-72 max-w-72 min-w-72 h-72 object-cover" src="<?= $row['url-photo'] ?>" alt="Foto">
            </div>
            <?php endif; ?>

            <div class="mx-auto py-4 text-center">
                <div class="font-bold text-xl mb-2 font-Inter"><?= $row['nama'] ?></div>
                <p class="text-gray-700 text-lg font-Inter"><?= $row['jabatan'] ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
        <!-- end fecth -->
    </div>

    <!-- fetch selesai -->

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