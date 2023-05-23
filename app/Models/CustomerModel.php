<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'id_customer';
    protected $allowedFields = ['id_customer', 'nama', 'alamat', 'email', 'tgl_lahhir', 'no_hp', 'jk', 'foto'];

}