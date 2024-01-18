<?php
namespace App\Models;

use CodeIgniter\Model;

class JenisKelaminModel extends Model
{
    protected $table = 'jenis_kelamin';
    protected $allowedFields = ['jumlah_perempuan', 'jumlah_laki-laki'];
}