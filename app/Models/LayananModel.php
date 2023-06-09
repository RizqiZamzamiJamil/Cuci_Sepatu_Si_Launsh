<?php

namespace App\Models;

use CodeIgniter\Model;

class LayananModel extends Model
{
    protected $table = 'layanan';
    protected $primaryKey = 'id_layanan';
    protected $allowedFields = ['nama', 'harga', 'keterangan'];

    public function getLayananByNama($nama)
    {
        return $this->where('nama', $nama)->first();
    }

    public function getLayananById($id)
    {
        return $this->where('id_layanan', $id)->first();
    }
}
