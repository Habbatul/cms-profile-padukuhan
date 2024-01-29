<?php
namespace App\Controllers;

use App\Database\Migrations\JenisKelamin;
use App\Models\JenisKelaminModel;
use App\Models\PekerjaanModel;
use App\Models\PendidikanModel;
use App\Models\UmurModel;
use App\Models\PerangkatModel;
use App\Models\PengumumanModel;

class FromHandler extends BaseController
{

    // CRUD Umur
    public function tambahUmur()
    {
        $umurModel = new UmurModel();

        $kelompokUmur = $this->request->getPost('kelompokUmur');
        $jumlahUmur   = $this->request->getPost('jumlahUmur');

        $data = [
            'kelompok' => $kelompokUmur,
            'jumlah'   => $jumlahUmur,
        ];

        $umurModel->insert($data);

        return redirect()->to('/admin/beranda#UmurPenduduk');
    } 

    public function ubahUmur()
    {
        $umurModel = new UmurModel();

        $id = $this->request->getPost('id');
        $kelompokUmur = $this->request->getPost('kelompokUmur');
        $jumlahUmur   = $this->request->getPost('jumlahUmur');

        $data = [
            'id' => $id,
            'kelompok' => $kelompokUmur,
            'jumlah'   => $jumlahUmur,
        ];

        $umurModel->where('id', $id)->set($data)->update();;

        return redirect()->to('/admin/beranda#UmurPenduduk');
    } 

    public function hapusUmur()
    {
        $umurModel = new UmurModel();

        $id = $this->request->getGet('code');

        $umurModel->where('id', $id)->delete();

        return redirect()->to('/admin/beranda#UmurPenduduk');
    } 

    // CRUD Pekerjaan
    public function tambahPekerjaan()
    {
        $pekerjaanModel = new PekerjaanModel();
        $namaPekerjaan = $this->request->getPost('kelompokPekerjaan');
        $jumlah = $this->request->getPost('jumlahPekerjaan');

        $data = [
            'nama_pekerjaan' => $namaPekerjaan,
            'jumlah' => $jumlah,
        ];

        $pekerjaanModel->insert($data);

        return redirect()->to('/admin/beranda#PekerjaanPenduduk');
    }

    public function ubahPekerjaan()
    {
        $pekerjaanModel = new PekerjaanModel();
        $id = $this->request->getPost('id');
        $namaPekerjaan = $this->request->getPost('kelompokPekerjaan');
        $jumlah = $this->request->getPost('jumlahPekerjaan');

        $data = [
            'nama_pekerjaan' => $namaPekerjaan,
            'jumlah' => $jumlah,
        ];

        $pekerjaanModel->where('id', $id)->set($data)->update();

        return redirect()->to('/admin/beranda#PekerjaanPenduduk');
    }

    public function hapusPekerjaan()
    {
        $pekerjaanModel = new PekerjaanModel();

        $id = $this->request->getGet('code');

        $pekerjaanModel->where('id', $id)->delete();

        return redirect()->to('/admin/beranda#PekerjaanPenduduk');
    }

     // CRUD Pendidikan
     public function tambahPendidikan()
     {
         $pendidikanModel = new PendidikanModel();
 
         $kelompokPendidikan = $this->request->getPost('kelompokPendidikan');
         $jumlahPendidikan   = $this->request->getPost('jumlahPendidikan');
 
         $data = [
             'pendidikan' => $kelompokPendidikan,
             'jumlah'   => $jumlahPendidikan,
         ];
 
         $pendidikanModel->insert($data);
 
         return redirect()->to('/admin/beranda#PendidikanPenduduk');
     } 
 
     public function ubahPendidikan()
     {
         $pendidikanModel = new PendidikanModel();
 
         $id = $this->request->getPost('id');
         $kelompokPendidikan = $this->request->getPost('kelompokPendidikan');
         $jumlahPendidikan   = $this->request->getPost('jumlahPendidikan');
 
         $data = [
             'id' => $id,
             'pendidikan' => $kelompokPendidikan,
             'jumlah'   => $jumlahPendidikan,
         ];
 
         $pendidikanModel->where('id', $id)->set($data)->update();;
 
         return redirect()->to('/admin/beranda#PendidikanPenduduk');
     } 
 
     public function hapusPendidikan()
     {
         $pendidikanModel = new PendidikanModel();
 
         $id = $this->request->getGet('code');
 
         $pendidikanModel->where('id', $id)->delete();
 
         return redirect()->to('/admin/beranda#PendidikanPenduduk');
     } 

     // CRUD Jenis Kelamin
     public function ubahJenisKelamin()
     {
         $jenisKelaminModel = new JenisKelaminModel();
 
         $id = $this->request->getPost('id');
         $kelompokUmur = $this->request->getPost('jumlahLaki');
         $jumlahUmur   = $this->request->getPost('jumlahPerempuan');
 
         $data = [
             'id' => $id,
             'jumlah_laki-laki' => $kelompokUmur,
             'jumlah_perempuan'   => $jumlahUmur,
         ];
 
         $jenisKelaminModel->where('id', $id)->set($data)->update();
 
         return redirect()->to('/admin/beranda#JenisKelamin');
     }   


    // CRUD Jenis ubahPengumuman
    public function ubahPengumuman()
    {
        $pengumumanModel = new PengumumanModel();
        
        $id = $this->request->getPost('id');
        $judul = $this->request->getPost('judul');
        $tanggal   = $this->request->getPost('tanggal');
        $penulis   = $this->request->getPost('penulis');
        $artikel   = $this->request->getPost('artikel');

        //pemrosesan file
        $namaGambar = $pengumumanModel->getFotoById($id);

        //ambil request foto
        $foto = $this->request->getFile('foto');

        //Array untuk data ke db
        $data = [
            'id' => $id,
            'judul' => $judul,
            'tanggal'   => $tanggal,
            'user'   => $penulis,
            'artikel'   => $artikel,
        ];

        // Menyimpan gambar di server dengan nama unik (bila foto ada, tidak wajib)
        if ($foto->isValid() && !$foto->hasMoved()) {
            $newName = $foto->getRandomName();
            $foto->move(ROOTPATH . 'public/uploads', $newName);
            // Kompresi gambar menggunakan library Image
            \Config\Services::image()
            ->withFile(ROOTPATH . 'public/uploads/' . $newName)
            ->save(ROOTPATH . 'public/uploads/' . $newName, 30);

            //ekstraksi base_url pada $namaGambar
            $namaGambar = str_replace(base_url(), '', $namaGambar);
            // Hapus file lama jika ada
            if ($namaGambar && file_exists(ROOTPATH . 'public/' . $namaGambar)) {
                unlink(ROOTPATH . 'public/' . $namaGambar);
            }

            //tambahkan key 'foto' untuk mengubah imahge
            $data['foto'] = base_url("uploads/".$newName);
        }


        if(empty($id) || empty($judul) || empty($tanggal) || empty($artikel )){
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        //gunakan query builder
        $pengumumanModel->where('id', $id)->set($data)->update();;

        return redirect()->to(base_url('/admin/form-ubah-pengumuman?code=').$id);
    }   

    public function tambahPengumuman()
    {
        $pengumumanModel = new PengumumanModel();
        
        $id = $this->request->getPost('id');
        $judul = $this->request->getPost('judul');
        $tanggal   = $this->request->getPost('tanggal');
        $penulis   = $this->request->getPost('penulis');
        $artikel   = $this->request->getPost('artikel');

        //ambil request foto
        $foto = $this->request->getFile('foto');

        //Array untuk data ke db
        $data = [
            'id' => $id,
            'judul' => $judul,
            'tanggal'   => $tanggal,
            'user'   => $penulis,
            'artikel'   => $artikel,
        ];

        // Menyimpan gambar di server dengan nama unik (bila foto ada, tidak wajib)
        if ($foto->isValid() && !$foto->hasMoved()) {
            $newName = $foto->getRandomName();
            $foto->move(ROOTPATH . 'public/uploads', $newName);
            // Kompresi gambar menggunakan library Image
            \Config\Services::image()
            ->withFile(ROOTPATH . 'public/uploads/' . $newName)
            ->save(ROOTPATH . 'public/uploads/' . $newName, 30);

            $data['foto'] = base_url("uploads/".$newName);
        }


        // if(empty($id) || empty($judul) || empty($tanggal) || empty($artikel )){
        //     throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        // }

        //gunakan query builder
        $pengumumanModel->insert($data);
        

        return redirect()->to(base_url('/admin/pengumuman'));
    }   

    public function hapusPengumuman()
    {
        $pengumumanModel = new PengumumanModel();

        $id = $this->request->getGet('code');

        $pengumumanModel->where('id', $id)->delete();

        return redirect()->to('/admin/pengumuman');
    } 
          
       // CRUD Jenis ubahPerangkat
    public function ubahPerangkat()
    {
        $perangkatModel = new PerangkatModel();
        
        $id = $this->request->getPost('id');
        $nama = $this->request->getPost('nama');
        $jabatan   = $this->request->getPost('jabatan');

        //pemrosesan file
        $namaGambar = $perangkatModel->getFotoById($id);

        //ambil request foto
        $foto = $this->request->getFile('url-photo');

        //Array untuk data ke db
        $data = [
            'nama' => $nama,
            'jabatan' => $jabatan,
        ];

        // Menyimpan gambar di server dengan nama unik (bila foto ada, tidak wajib)
        if ($foto->isValid() && !$foto->hasMoved()) {
            $newName = $foto->getRandomName();
            $foto->move(ROOTPATH . 'public/uploads', $newName);
            // Kompresi gambar menggunakan library Image
            \Config\Services::image()
            ->withFile(ROOTPATH . 'public/uploads/' . $newName)
            ->save(ROOTPATH . 'public/uploads/' . $newName, 30);

            //ekstraksi base_url pada $namaGambar
            $namaGambar = str_replace(base_url(), '', $namaGambar);
            // Hapus file lama jika ada
            if ($namaGambar && file_exists(ROOTPATH . 'public/' . $namaGambar)) {
                unlink(ROOTPATH . 'public/' . $namaGambar);
            }

            //tambahkan key 'foto' untuk mengubah imahge
            $data['url-photo'] = base_url("uploads/".$newName);
        }

        //gunakan query builder
        $perangkatModel->where('id', $id)->set($data)->update();;

        return redirect()->to(base_url('/admin/form-ubah-perangkat?code=').$id);
    }   

    public function tambahPerangkat()
    {
        $perangkatModel = new PerangkatModel();

        $nama = $this->request->getPost('nama');
        $jabatan   = $this->request->getPost('jabatan');

        //ambil request foto
        $foto = $this->request->getFile('url-photo');

        //Array untuk data ke db
        $data = [
            'jabatan' => $jabatan,
            'nama' => $nama,
        ];

        // Menyimpan gambar di server dengan nama unik (bila foto ada, tidak wajib)
        if ($foto->isValid() && !$foto->hasMoved()) {
            $newName = $foto->getRandomName();
            $foto->move(ROOTPATH . 'public/uploads', $newName);
            // Kompresi gambar menggunakan library Image
            \Config\Services::image()
            ->withFile(ROOTPATH . 'public/uploads/' . $newName)
            ->save(ROOTPATH . 'public/uploads/' . $newName, 30);

            $data['url-photo'] = base_url("uploads/".$newName);
        }


        // if(empty($id) || empty($judul) || empty($tanggal) || empty($artikel )){
        //     throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        // }

        //gunakan query builder
        $perangkatModel->insert($data);
        

        return redirect()->to(base_url('/admin/perangkat'));
    }   

    public function hapusPerangkat()
    {
        $perangkatModel = new PerangkatModel();

        $id = $this->request->getGet('code');

        $perangkatModel->where('id', $id)->delete();

        return redirect()->to('/admin/perangkat');
    } 

}