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
                        <h1 class="mt-4">Demografis</h1>

                        <!-- card atas -->
                        <div class="row mt-3">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Umur Penduduk</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#UmurPenduduk">Lihat Data</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Pekerjaan Penduduk</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#PekerjaanPenduduk">Lihat Data</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Pendidikan Penduduk</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#PendidikanPenduduk">Lihat Data</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Jenis Kelamin</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#JenisKelamin">Lihat Data</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <!-- Tabel Pertama -->
                        <div id="UmurPenduduk" class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Umur Penduduk
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">    
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Kelompok Umur</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Menu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- fecth disini -->
                                        <?php $i=0; foreach ($umurData as $row) : ?>
                                        <tr>
                                            <td><?= $row['kelompok'] ?></td>
                                            <td><?= $row['jumlah'] ?></td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#ubahUmurModal<?= ++$i; ?>"><small>Ubah</small></a>
                                                <a class="btn btn-danger btn-sm" href="/admin/hapusUmur?code=<?= $row['id']; ?>"><small>Hapus</small></a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                        <!-- End fetch -->
                                    </tbody>
                                </table>
                                </div>
                                <a class="btn btn-success w-auto mt-2" data-bs-toggle="modal" data-bs-target="#tambahUmurModal">Tambah Data Umur</a>
                            </div>
                        </div>

                        <!-- Tabel Kedua -->
                        <div id="PekerjaanPenduduk" class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Pekerjaan Penduduk
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">    
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nama Pekerjaan</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Menu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- fecth disini -->
                                        <?php $i=0; foreach ($pekerjaanData as $row) : ?>
                                        <tr>
                                            <td><?= $row['nama_pekerjaan']; ?></td>
                                            <td><?= $row['jumlah']; ?></td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#ubahPekerjaanModal<?= ++$i; ?>"><small>Ubah</small></a>
                                                <a class="btn btn-danger btn-sm" href="/admin/hapusPekerjaan?code=<?= $row['id']; ?>"><small>Hapus</small></a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                        <!-- End fetch -->
                                    </tbody>
                                </table>
                                </div>
                                <a class="btn btn-success w-auto mt-2" data-bs-toggle="modal" data-bs-target="#tambahPekerjaanModal">Tambah Data Pekerjaan</a>
                            </div>
                        </div>

                        <!-- Tabel Ketiga -->
                        <div id="PendidikanPenduduk" class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Pendidikan Penduduk
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">    
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Pendidikan</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Menu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- fecth disini -->
                                        <?php $i=0; foreach ($pendidikanData as $row) : ?>
                                        <tr>
                                            <td><?= $row['pendidikan']; ?></td>
                                            <td><?= $row['jumlah']; ?></td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#ubahPendidikanModal<?= ++$i; ?>"><small>Ubah</small></a>
                                                <a class="btn btn-danger btn-sm" href="/admin/hapusPendidikan?code=<?= $row['id']; ?>"><small>Hapus</small></a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                        <!-- End fetch -->
                                    </tbody>
                                </table>
                                </div>
                                <a class="btn btn-success w-auto mt-2" data-bs-toggle="modal" data-bs-target="#tambahPendidikanModal">Tambah Data Pendidikan</a>
                            </div>
                        </div>

                        <!-- Tabel Keempat -->
                        <div id="JenisKelamin" class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Jenis Kelamin
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">    
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Jenis Kelamin</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Menu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- fecth disini -->
                                        <tr>
                                            <td>Laki-laki</td>
                                            <td><?= $jenisKelaminData['jumlah_laki-laki']; ?></td>
                                            <td rowspan="2" class="text-center">
                                                <a class="btn btn-md btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#ubahJenisKelaminModal">Ubah</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Perempuan</td>
                                            <td><?= $jenisKelaminData['jumlah_perempuan']; ?></td>
                                        </tr>
                                        <!-- End fetch -->
                                    </tbody>
                                </table>
                                </div>
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



        <!-- Modal  -->
        <!-- Tambah Data Umur Modal -->
        <?php include ("modalDemografiHelper.php") ?>





        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?=  base_url('sb-admin/js/scripts.js') ?>"></script>
    </body>
</html>
