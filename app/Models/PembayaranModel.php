<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    protected $allowedFields = ['id_pembayaran', 'id_pesanan', 'status_bayar', 'metode', 'total_harga'];

    // public function getLayananByNama($nama)
    // {
    //     return $this->where('nama', $nama)->first();
    // }
}
