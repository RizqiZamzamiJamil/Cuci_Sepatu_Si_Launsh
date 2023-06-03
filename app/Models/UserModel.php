<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primarykey = 'id_user';
    //protected $deletedField = 'deleted_at';
    protected $allowedFields = ['id_user', 'id_pengguna', 'username', 'password', 'level'];

    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first();
    }
}