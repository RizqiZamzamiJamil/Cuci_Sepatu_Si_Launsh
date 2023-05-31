<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\LayananModel;
use App\Models\KategoriBarangModel;

//use CodeIgniter\Controller;

//use CodeIginter\Session\Session;

class Auth extends BaseController
{
    protected $userModel;
    protected $layananModel;
    protected $kategoriBarangModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->layananModel = new LayananModel();
        $this->kategoriBarangModel = new KategoriBarangModel();
    }
    public function index()
    {
        return view('pages/cuci');
    }

    public function insertPesanan()
    {
        $time = date('y');

    }
}
?>