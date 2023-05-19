<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customer extends BaseController
{
    // Method untuk menampilkan halaman form pendaftaran akun
    public function index()
    {
        return view('pages/daftar');
    }

    // Method untuk memproses data pendaftaran akun
    public function save()
    {
        $accountModel = new CustomerModel();

        // Ambil data dari form pendaftaran
        $nama = $this->request->getPost('nama_depan', 'nama_belakang');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $phone = $this->request->getPost('phone');
        $alamat = $this->request->getPost('alamat');

        // Simpan data ke database menggunakan model
        $data = [
            'nama_depan','nama_belakang' => $nama,
            'email' => $email,
            'phone' => $phone,
            'password' => $password,
            'alamat' => $alamat
        ];
        $accountModel->saveAccount($data);

        // Redirect ke halaman sukses atau halaman lain yang diinginkan
        return redirect()->to('/pages/home');
    }
    /*     public function index()
    {
        return view('welcome_message');
    } */
}
