<?php

namespace App\Models;

use CodeIgniter\Model;

class LayananKonsumenModel extends Model
{
    protected $table = 'layanan_konsumen';
    protected $primaryKey = 'id_lk';
    protected $allowedFields = ['id_lk', 'nama', 'email', 'telepon', 'pertanyaan'];
}