<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customer';
    protected $allowedFields = ['id_customer', 'nama', 'alamat', 'email', 'tgl_lahir', 'no_hp', 'jk', 'foto'];

    public function getCustomerByIdPengguna($id_customer)
    {
        return $this->where('id_customer', $id_customer)->first();
    }
}