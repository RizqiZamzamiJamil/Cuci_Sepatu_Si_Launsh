<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriBarangModel extends Model
{
    protected $table = 'kategori_barang';
    protected $primaryKey = 'id_kategori';
    protected $allowedFields = ['nama', 'harga', 'keterangan'];

    public function getKategoriByNama($nama)
    {
        return $this->where('nama', $nama)->first();
    }
}