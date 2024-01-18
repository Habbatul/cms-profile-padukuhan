<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin</title>
        <link href="<?=  base_url('sb-admin/css/styles.css') ?>" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Admin Padukuhan</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            </div>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Ubah Akun</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- side navigation -->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Halaman</div>
                            <a class="nav-link collapsed" href="/admin/beranda">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Demografis
                            </a>
                            <a class="nav-link collapsed" href="/admin/pengumuman">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pengumuman
                            </a>
                            <a class="nav-link collapsed" href="/admin/perangkat">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Perangkat
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <!-- content -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Pengumuman</h1>

                        <!-- card atas -->
                        <div class="row mt-3">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><b>Jumlah Data Pengumuman : <?= $countData; ?> </b></div>
                                </div>
                            </div>
                           
                        </div>
                        <div> <a class="btn btn-success w-auto mt-2 mb-2">Tambah Pengumuman</a></div>
                       
                        <!-- Tabel Pertama -->
                        <div id="UmurPenduduk" class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Artikel Pengumuman
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th >Judul</th>
                                            <th style="width:10rem;">Foto</th>
                                            <th >Tanggal</th>
                                            <th >Penulis</th>
                                            <th style="width:20rem">Artikel</th>
                                            <th >Pilihan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- fecth disini -->
                                        <?php foreach ($pengumumanData as $row) : ?>
                                        <tr>
                                            <td><?= $row['judul'] ?></td>
                                            <td class="text-center"><img src="<?= $row['foto'] ?>" class="img-fluid rounded ratio ratio-1x1" style="width: 200px; height: 200px;"></td>
                                            <td><?= $row['tanggal'] ?></td>
                                            <td><?= $row['user'] ?></td>
                                            <td>
                                                <div style="width:16rem"></div>
                                                <p class="artikelContent">
                                                    <?= $row['artikel'] ?>
                                                </p>
                                                <button class="toggleButton btn btn-warning btn-sm" onclick="toggleText()">Klik untuk text penuh</button>
                                            </td>

                                            <td class="text-center">
                                                <a class="btn btn-primary btn-sm mt-2"><small>Ubah</small></a>
                                                <a class="btn btn-danger btn-sm mt-2"><small>Hapus</small></a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                        <!-- End fetch -->
                                    </tbody>
                                </table>
                                </div>
                                <?php include('pagerPengumumanHelper.php'); ?>
                                
                            </div>
                        </div>

                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Habbatul Qolbi H 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?=  base_url('sb-admin/js/scripts.js') ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?=  base_url('sb-admin/assets/demo/chart-area-demo.js') ?>"></script>
        <script src="<?=  base_url('sb-admin/assets/demo/chart-bar-demo.js') ?>"></script>
        <script>
                document.addEventListener("DOMContentLoaded", function () {
                var artikelContents = document.querySelectorAll(".artikelContent");
                var toggleButtons = document.querySelectorAll(".toggleButton");

                artikelContents.forEach(function (artikelContent, index) {
                    var fullText = artikelContent.textContent;
                    var isFull = false;

                    toggleButtons[index].addEventListener("click", function () {
                        toggleText(artikelContent, toggleButtons[index]);
                    });

                    var maxChars = 200;

                    if (artikelContent.textContent.length > maxChars) {
                        var truncatedText = artikelContent.textContent.substring(0, maxChars);
                        artikelContent.textContent = truncatedText + "...";
                    }

                    function toggleText(artikelContent, toggleButton) {
                        if (isFull) {
                            artikelContent.textContent = fullText.substring(0, maxChars) + "...";
                            toggleButton.textContent = "Klik untuk text penuh";
                        } else {
                            artikelContent.textContent = fullText;
                            toggleButton.textContent = "Klik untuk sembunyikan";
                        }

                        isFull = !isFull;
                    }
                });
            });
        </script>
    </body>
</html>
