<div class="modal fade" id="tambahUmurModal" tabindex="-1" aria-labelledby="tambahUmurModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahUmurModalLabel">Tambah Data Umur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/tambahUmur') ?>" method="Post">
                    <div class="mb-3">
                        <label for="kelompokUmur" class="form-label">Kelompok Umur</label>
                        <input type="text" class="form-control" id="kelompokUmur" name="kelompokUmur" placeholder="Contoh: Anak atau Balita" required>
                    </div>
                    <div class="mb-3">
                        <label for="jumlahUmur" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" id="jumlahUmur" name="jumlahUmur" placeholder="Contoh: 1-100" required>
                    </div>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tambahPekerjaanModal" tabindex="-1" aria-labelledby="tambahPekerjaanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahPekerjaanModalLabel">Tambah Data Pekerjaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/tambahPekerjaan') ?>" method="Post">
                    <div class="mb-3">
                        <label for="kelompokPekerjaan" class="form-label">Kelompok Pekerjaan</label>
                        <input type="text" class="form-control" id="kelompokPekerjaan" name="kelompokPekerjaan" placeholder="Contoh: Petani" required>
                    </div>
                    <div class="mb-3">
                        <label for="jumlahPekerjaan" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" id="jumlahPekerjaan" name="jumlahPekerjaan" placeholder="Contoh: 1-100" required>
                    </div>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tambahPendidikanModal" tabindex="-1" aria-labelledby="tambahPendidikanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahPendidikanModalLabel">Tambah Data Pendidikan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/tambahPendidikan') ?>" method="Post">
                    <div class="mb-3">
                        <label for="kelompokPendidikan" class="form-label">Kelompok Pendidikan</label>
                        <input type="text" class="form-control" id="kelompokPendidikan" name="kelompokPendidikan" placeholder="Contoh: SD, SMP, SMA" required>
                    </div>
                    <div class="mb-3">
                        <label for="jumlahPendidikan" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" id="jumlahPendidikan" name="jumlahPendidikan" placeholder="Contoh: 1-100" required>
                    </div>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php $i=0; foreach ($pekerjaanData as $row) : ?>
<div class="modal fade" id="ubahPekerjaanModal<?= ++$i; ?>" tabindex="-1" aria-labelledby="ubahPekerjaanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ubahPekerjaanModalLabel">Ubah Data Pekerjaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/ubahPekerjaan') ?>" method="Post">
                    <input type="hidden" name="id" value="<?= $row['id']; ?>">
                    <div class="mb-3">
                        <label for="kelompokPekerjaan" class="form-label">Kelompok Pekerjaan</label>
                        <input type="text" class="form-control" id="kelompokPekerjaan" name="kelompokPekerjaan" value="<?= $row['nama_pekerjaan']; ?>" placeholder="Contoh: Petani" required>
                    </div>
                    <div class="mb-3">
                        <label for="jumlahPekerjaan" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" id="jumlahPekerjaan" name="jumlahPekerjaan" value="<?= $row['jumlah']; ?>" placeholder="Contoh: 1-100" required>
                    </div>
                    <button type="submit" class="btn btn-success">Ubah</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>


<?php $i=0; foreach ($umurData as $row) : ?>
<div class="modal fade" id="ubahUmurModal<?= ++$i; ?>" tabindex="-1" aria-labelledby="ubahUmurModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ubahUmurModalLabel">Ubah Data Umur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/ubahUmur') ?>" method="Post">
                    <input type="hidden" value="<?= $row['id']; ?>" name="id">
                    <div class="mb-3">
                        <label for="kelompokUmur" class="form-label">Kelompok Umur</label>
                        <input type="text" class="form-control" id="kelompokUmur" name="kelompokUmur" value="<?= $row['kelompok']; ?>" placeholder="Contoh: Petani" required>
                    </div>
                    <div class="mb-3">
                        <label for="jumlahUmur" class="form-label">Jumlah</label>
                        <input type="text" class="form-control" id="jumlahUmur" name="jumlahUmur" value="<?= $row['jumlah']; ?>" placeholder="Contoh: 1-100" required>
                    </div>
                    <button type="submit" class="btn btn-primary">ubah</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>




<?php $i=0; foreach ($pendidikanData as $row) : ?>
<div class="modal fade" id="ubahPendidikanModal<?= ++$i; ?>" tabindex="-1" aria-labelledby="ubahPendidikanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ubahPendidikanModalLabel">Ubah Data Pendidikan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/ubahPendidikan') ?>" method="Post">
                    <input type="hidden" name="id" value="<?= $row['id']; ?>">
                    <div class="mb-3">
                        <label for="kelompokPendidikan" class="form-label">Kelompok Pendidikan</label>
                        <input type="text" class="form-control" id="kelompokPendidikan" name="kelompokPendidikan" value="<?= $row['pendidikan']; ?>" placeholder="Contoh: Petani" required>
                    </div>
                    <div class="mb-3">
                        <label for="jumlahPendidikan" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" id="jumlahPendidikan" name="jumlahPendidikan" value="<?= $row['jumlah']; ?>" placeholder="Contoh: 1-100" required>
                    </div>
                    <button type="submit" class="btn btn-primary">ubah</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>


<div class="modal fade" id="ubahJenisKelaminModal" tabindex="-1" aria-labelledby="ubahJenisKelaminModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ubahJenisKelaminModalLabel">Ubah Data Jenis Kelamin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/ubahJenisKelamin') ?>" method="Post">
                    <input type="hidden" name="id" value="<?= $jenisKelaminData['id']; ?>">
                    <div class="mb-3">
                        <label for="jumlahLaki" class="form-label">Jumlah laki-laki</label>
                        <input type="text" class="form-control" id="JumlahLaki" name="jumlahLaki" value="<?= $jenisKelaminData['jumlah_laki-laki']; ?>" placeholder="Contoh: Petani" required>
                    </div>
                    <div class="mb-3">
                        <label for="jumlahPerempuan" class="form-label">Jumlah perempuan</label>
                        <input type="text" class="form-control" id="jumlahPerempuan" name="jumlahPerempuan" value="<?= $jenisKelaminData['jumlah_perempuan']; ?>" placeholder="Contoh: 1-100" required>
                    </div>
                    <button type="submit" class="btn btn-primary">ubah</button>
                </form>
            </div>
        </div>
    </div>
</div>