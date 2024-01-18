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
 
         $jenisKelaminModel->where('id', $id)->set($data)->update();;
 
         return redirect()->to('/admin/beranda#JenisKelamin');
     }    
}