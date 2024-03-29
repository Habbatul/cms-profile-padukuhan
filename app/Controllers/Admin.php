<?php

namespace App\Controllers;

use App\Models\JenisKelaminModel;
use App\Models\PekerjaanModel;
use App\Models\PendidikanModel;
use App\Models\UmurModel;
use App\Models\PerangkatModel;
use App\Models\PengumumanModel;
use App\Models\UserModel;

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

    public function ubahPengumuman()
    {
        $id = $this->request->getGet('code');

        // implementasi penggunaan file disini

        $pengumumanModel = new PengumumanModel();
        $pengumumanData = $pengumumanModel->find($id);
        return view("/admin/ubah-pengumuman", ['pengumuman' => $pengumumanData]);
    }

    public function tambahPengumuman()
    {
        return view("/admin/tambah-pengumuman");
    }
    
    public function ubahPerangkat()
    {
        $id = $this->request->getGet('code');

        // implementasi penggunaan file disini

        $perangkatModel = new PerangkatModel();
        $perangkatData = $perangkatModel->find($id);
        return view("/admin/ubah-perangkat", ['perangkat' => $perangkatData]);
    }

    public function tambahPerangkat()
    {
        return view("/admin/tambah-perangkat");
    }

    //CRUD user

    public function ubahUser()
    {
        $userModel = new UserModel();

        $id = 1;
        $data = $userModel->find($id);
        return view("/admin/ubah-user", ['user' => $data]);
    }
}