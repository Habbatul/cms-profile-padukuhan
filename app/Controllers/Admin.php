<?php

namespace App\Controllers;

use App\Models\JenisKelaminModel;
use App\Models\PekerjaanModel;
use App\Models\PendidikanModel;
use App\Models\UmurModel;
use App\Models\PerangkatModel;
use App\Models\PengumumanModel;

class Admin extends BaseController
{
    // public function index(): string
    // {
    // }

    public function demografi(): string
    {
        $jenisKelaminModel = new JenisKelaminModel();
        $pekerjaanModel = new PekerjaanModel();
        $pendidikanModel = new PendidikanModel();
        $umurModel = new UmurModel();


        $jenisKelaminData = $jenisKelaminModel->find(1); 
        $pekerjaanData = $pekerjaanModel->findAll();
        $pendidikanData = $pendidikanModel->findAll();
        $umurData = $umurModel->findAll();

        return view('admin/demografis', [
            'umurData' => $umurData,
            'pendidikanData' => $pendidikanData,
            'jenisKelaminData' => $jenisKelaminData,
            'pekerjaanData' => $pekerjaanData,
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

        $countData = $pengumumanModel->countAllResults();
    
        return view('admin/pengumuman', [
            'pengumumanData' => $data['data'],
            'pager' => $pagerArray,
            'currentPage' => $currentPage,
            'countData' => $countData,
        ]);
    }

    public function perangkat(): string
    {
        $perangkatModel = new PerangkatModel();

        $perangkatData = $perangkatModel->findAll();

        return view('admin/perangkat', [
            'perangkatData' => $perangkatData,
        ]);
    }

}