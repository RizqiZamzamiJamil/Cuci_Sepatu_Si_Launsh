<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use App\Models\UserModel;
use App\Models\PesananModel;
use App\Models\LayananModel;
use App\Models\KategoriBarangModel;

class Admin extends BaseController
{
    protected $customerModel;
    protected $userModel;
    protected $pesananModel;
    protected $layananModel;
    protected $kategoriModel;
    public function __construct()
    {
        $this->customerModel = new CustomerModel();
        $this->userModel = new UserModel();
        $this->pesananModel = new PesananModel();
        $this->layananModel = new LayananModel();
        $this->kategoriModel = new KategoriBarangModel();
    }
    public function index()
    {
        return view('pages/adminDashboard');
    }
}
