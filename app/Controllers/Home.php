<?php

namespace App\Controllers;

use App\Models\JenisKelaminModel;
use App\Models\PekerjaanModel;
use App\Models\PendidikanModel;
use App\Models\UmurModel;
use App\Models\PerangkatModel;
use App\Models\PengumumanModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('user/beranda');
    }

    public function demografi(): string
    {
        $jenisKelaminModel = new JenisKelaminModel();
        $pekerjaanModel = new PekerjaanModel();
        $pendidikanModel = new PendidikanModel();
        $umurModel = new UmurModel();

        // Ambil data dari model
        $jenisKelaminData = $jenisKelaminModel->find(1); // Misalnya ID jenis kelamin yang ingin diambil adalah 1
        $pekerjaanData = $pekerjaanModel->findAll();
        $pendidikanData = $pendidikanModel->findAll();
        $umurData = $umurModel->findAll();

        // Kirim data ke view
        return view('user/demografi', [
            'umurData' => $umurData,
            'pendidikanData' => $pendidikanData,
            'jenisKelaminData' => $jenisKelaminData,
            'pekerjaanData' => $pekerjaanData,
        ]);
    }



    public function detail_pengumuman(): string
    {
        $code = $this->request->getGet('code');
        $pengumumanModel = new PengumumanModel();
        $pengumumanData = $pengumumanModel->find($code);

        $pengumumanNew = $pengumumanModel->sortByDate(5);

        if ($pengumumanData==null) {
            // Jika kondisi tidak memenuhi, lemparkan error 404
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('user/detail-pengumuman', [
            'pengumumanData' => $pengumumanData,
            'pengumumanNew' => $pengumumanNew,
        ]);
    }



    public function pengumuman(): string
    {
        $pengumumanModel = new PengumumanModel();
    
        $currentPage = $this->request->getVar('page') ?? 1;
        $perPage = 9;
    
        $data = $pengumumanModel->getPagedData($currentPage, $perPage);
    
        $pagerArray = [];
    
        for ($i = 1; $i <= $data['pager']->getPageCount(); $i++) {
            $pagerArray[] = $i;
        }
    
        return view('user/pengumuman', [
            'pengumumanData' => $data['data'],
            'pager' => $pagerArray,
            'currentPage' => $currentPage,
        ]);
    }
    
    



    public function perangkat(): string
    {
        $perangkatModel = new PerangkatModel();

        $perangkatData = $perangkatModel->findAll();

        return view('user/perangkat', [
            'perangkatData' => $perangkatData,
        ]);
    }



    public function potensi(): string
    {
        return view('user/potensi');
    }



    public function visi_misi(): string
    {
        return view('user/visi-misi');
    }
}
