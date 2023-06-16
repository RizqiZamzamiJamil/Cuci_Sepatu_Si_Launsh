<?php

namespace App\Models;

use CodeIgniter\Model;

class LogPerubahanModel extends Model
{
    protected $table = 'log_perubahan';
    protected $primaryKey = 'id_logperubahan';
    protected $allowedFields = ['id_logperubahan', 'id_admin', 'tanggal', 'query', 'keterangan'];
}
