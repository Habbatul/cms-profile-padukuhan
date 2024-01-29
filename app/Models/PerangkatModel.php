<?php
namespace App\Models;

use CodeIgniter\Model;

class PerangkatModel extends Model
{
    protected $table = 'perangkat';
    protected $allowedFields = ['id', 'nama', 'url-photo', 'jabatan'];

    public function getFotoById($id)
    {
        $result = $this->select('url-photo') // Gantilah 'foto' dengan nama kolom gambar Anda
            ->where('id', $id)
            ->get()
            ->getRow();

        return $result ? $result->{'url-photo'} : null;
    }
}