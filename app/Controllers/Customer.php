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

/*     public function profile()
    {
        // Mendapatkan nilai session 'id_pengguna'
        $idPengguna = session('id_pengguna');

        // Membuat instance dari model 'CustomerModel'
        $customerModel = new CustomerModel();

        // Mengambil data customer berdasarkan 'id_pengguna' dari tabel customer
        $customer = $customerModel->find($idPengguna);

        // Meneruskan data customer ke view
        return view('pages/profil', ['customer' => $customer]);
    } */
}
