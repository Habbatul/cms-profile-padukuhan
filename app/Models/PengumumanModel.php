<?php
namespace App\Models;

use CodeIgniter\Model;

class PengumumanModel extends Model
{
    protected $table = 'pengumuman';

    public function sortByDate($limit){
        return $this->orderBy('tanggal', 'DESC')
        ->limit($limit)
        ->get()
        ->getResultArray();
    
    }

    public function getPagedData($page, $perPage)
    {
        $query = $this->select('*')
                      ->orderBy('tanggal', 'DESC') // Mengurutkan berdasarkan tanggal terbaru
                      ->paginate($perPage, 'default', $page);
    
        return [
            'data' => $query,
            'pager' => $this->pager,
        ];
    }
    
}