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
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    </head>
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
                        <h1 class="mt-4">Tambah Perangkat</h1>

                        <!-- card atas -->
                        <div class="row mt-3">
                           
                        </div>
                       
                        <!-- Tabel Pertama -->
                        <div id="UmurPenduduk" class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Artikel Pengumuman
                            </div>
                            <div class="card-body">

                                <form action="/admin/tambahArtikel" method="post" enctype="multipart/form-data"  onsubmit="updateQuillContent()">

                                    <!-- Judul -->
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input type="text" class="form-control" id="judul" name="judul" required>
                                    </div>

                                    <!-- Foto -->
                                    <div class="form-group mt-2">
                                        <label for="foto">Foto</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="foto" name="foto" style="display: none;" onchange="updateFileName()">
                                            <input type="text" class="form-control" id="file-name" readonly placeholder="Pilih file..." aria-describedby="inputGroupFileAddon">
                                            <div class="input-group-append">
                                                <label class="btn btn-primary" for="foto" style="cursor: pointer;">Browse</label>
                                            </div>
                                        </div>
                                        <small class="form-text text-muted">Unggah foto pengumuman (opsional).</small>
                                        <div class="mt-3">
                                            <label for="current-photo">Foto saat ini</label><br>
                                            <img id="current-photo" class="img-fluid" src="https://via.placeholder.com/320x180.png?text=Foto Pengumuman atau Artikel" alt="Current Photo" style="max-height: 200px;">
                                        </div>
                                        <script>
                                            // Update the displayed file name and preview the selected photo
                                            function updateFileName() {
                                                var fileName = document.getElementById('foto').value.split('\\').pop();
                                                document.getElementById('file-name').value = fileName;

                                                // Preview the selected photo
                                                var input = document.getElementById('foto');
                                                if (input.files && input.files[0]) {
                                                    var reader = new FileReader();
                                                    reader.onload = function (e) {
                                                        document.getElementById('current-photo').src = e.target.result;
                                                    };
                                                    reader.readAsDataURL(input.files[0]);
                                                }
                                            }
                                        </script>
                                    </div>

                                    <!-- Tanggal -->
                                    <div class="form-group mt-4">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                                    </div>

                                    <!-- Penulis -->
                                    <div class="form-group mt-2">
                                        <label for="penulis">Penulis</label>
                                        <input type="text" class="form-control" id="user" name="penulis" required>
                                    </div>

                                    <!-- Artikel -->
                                    <div class="form-group mt-2">
                                        <label for="artikel">Artikel</label>
                                        <!-- Quill editor container -->
                                        <div id="quill-editor" style="height: 300px;white-space: pre-wrap;"></div>
                                        <input type="hidden" id="artikel" name="artikel">
                                    </div>

                                    <input type="hidden" name="id">
                                    <button type="submit" class="btn btn-primary mt-4">Simpan Perubahan</button>
                                </form>
                                
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
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
        <!-- Agar quill text editor prevent users from pasting HTML that does not belong into the editor-->
        <script src="https://unpkg.com/quill-paste-smart@latest/dist/quill-paste-smart.js"></script>
        <script>
            // Initialize Quill
            var quill = new Quill('#quill-editor', {
                theme: 'snow',
                modules: {
                    toolbar: [
                        ['bold', 'italic', 'underline'],
                        [{ 'list': 'bullet' }],
                    ],
                },
            });
            quill.root.innerHTML = document.getElementById('artikel').value;
            // Mengambil yrks dari hidden input ke quill editor
            quill.on('text-change', function() {
                var htmlContent = quill.root.innerHTML;
                document.getElementById('artikel').value = htmlContent;
            });
        </script>

    </body>
</html>
