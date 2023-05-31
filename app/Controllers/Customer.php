<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use App\Models\UserModel;

class Customer extends BaseController
{
    protected $customerModel;
    protected $userModel;
    public function __construct()
    {
        $this->customerModel = new CustomerModel();
        $this->userModel = new UserModel();
    }
    // Method untuk menampilkan halaman form pendaftaran akun
    public function index()
    {
        return view('pages/daftar');
    }
}