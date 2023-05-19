<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'id_customer';
    protected $allowedFields = ['nama', 'alamat', 'email', 'no_hp'];

    public function saveAccount($data)
    {
        $this->insert($data);
        return $this->db->insertID();
    }
}