<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table = 'pesanan';
    protected $primaryKey = 'id_pesanan';
    protected $allowedFields = ['id_pesanan', 'id_customer', 'id_admin', 'id_kategori', 'id_layanan', 'status', 'tgl'];

    // public function getPesananByNama($nama)
    // {
    //     return $this->where('nama', $nama)->first();
    // }
}