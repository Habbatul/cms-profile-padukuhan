<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Padukuhan</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sora:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/output.css') ?>">
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
            <a href="/" class="hover:text-green-900 hover:bg-slate-50 py-2 px-3 rounded-2xl mx-2 font-Inter transition">Beranda</a>
            <a href="perangkat" class="hover:text-green-900 hover:bg-slate-50 py-2 px-3 rounded-2xl mx-2 font-Inter transition">Perangkat</a>
            <a href="potensi" class="hover:text-green-900 hover:bg-slate-50 py-2 px-3 rounded-2xl mx-2 font-Inter transition">Potensi</a>
            <a href="pengumuman" class="hover:text-green-900 text-black py-2 px-3 rounded-2xl bg-slate-50 mx-2 font-Inter transition">Pengumuman</a>
            <a href="visi-misi" class="hover:text-green-900 hover:bg-slate-50 py-2 px-3 rounded-2xl mx-2 font-Inter transition">Visi-Misi</a>
            <a href="demografi" class="hover:text-green-900 hover:bg-slate-50 py-2 px-3 rounded-2xl mx-2 font-Inter transition">Demografi</a>
        </div>
    </nav>



    <!-- Isian disini -->
    <div class=" text-3xl text-slate-700 text-center md:mb-10 mt-9 font-bold font-Poppins mx-5"><span class="text-emerald-700">Pengumuman</span> Padukuhan</div>

    <div class="flex flex-wrap justify-center mx-5 xl:mx-36 my-5 mb-12">
        <!-- Fetch Disini -->
        <?php foreach($pengumumanData as $row): ?>
            <a href="detail-pengumuman?code=<?=$row['id']?>" class="transition mx-4 hover:brightness-50 rounded-lg overflow-hidden shadow-lg m-5 border-emerald-600 border-2 bg-slate-100 w-[18rem] flex flex-col">
                

            <?php if (empty($row['foto']) || $row['foto'] == 'placeholder') : ?>
                <div class="mx-3 aspect-w-1 aspect-h-1 flex items-center justify-center mt-3">
                    <img class="w-full max-w-64 min-w-64 h-40 object-cover" src="https://via.placeholder.com/1280x720.png?text=Foto" alt="Foto">
                </div>
            <?php else : ?>
                <div class="mx-3 aspect-w-1 aspect-h-1 flex items-center justify-center mt-3">
                    <img class="w-full max-w-64 min-w-64 h-40 object-cover" src="<?=$row['foto']?>" alt="Foto">
                </div>
            <?php endif; ?>

                <h3 class="max-w-full mx-4 mt-4 text-lg font-bold whitespace-normal font-Inter mb-2"><?= $row['judul'] ?></h3>
                <!-- tanggal dan penulis -->
                <div class="mx-4 mt-auto py-4 max-w-64">
                    <div class="flex">
                        <svg style="color: rgb(14, 139, 126);" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" fill="#0e8b7e"></path>
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z" fill="#0e8b7e"></path>
                        </svg>
                        <p class="ml-2 font-Inter"><?= $row['user'] ?></p>
                    </div>
                    <div class="flex mt-2">
                        <svg style="color: rgb(14, 139, 126);" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" fill="#0e8b7e"></path>
                        </svg>
                        <p class="ml-2 font-Inter"><?= date('d F Y', strtotime($row['tanggal'])) ?></p>
                    </div>
                </div>
                <!-- End -->
            </a>
        <?php endforeach; ?>
        <!-- End Fetch -->
    </div>

    <!-- Pagination  -->
    <?php include('pagerPengumumanHelper.php') ?>


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

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>

</html>