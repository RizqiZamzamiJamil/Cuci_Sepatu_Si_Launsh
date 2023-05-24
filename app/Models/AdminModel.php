<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    protected $allowedFields = ['id_admin', 'nama', 'alamat', 'email', 'tgl_lahhir', 'no_hp', 'jk', 'foto'];
}