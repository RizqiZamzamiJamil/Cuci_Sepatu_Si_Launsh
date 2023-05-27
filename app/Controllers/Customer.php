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

    // Method untuk memproses data pendaftaran akun
    public function saveDaftar(){

        session();
        // validasi data
        // $validation->setRules([
        //     'nama' => [
        //         'label' => 'Nama Lengkap',
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => 'Nama Lengkap harus di isi!'
        //         ]
        //     ]
        //         ]);

        // if(!$this->validateData($_POST, $validation->getRules())){
        //     return redirect()->to('Pages/cekData')->withInput()->with('validation', $validation);
        // }

        if (!$this->validate([
            'judul' => 'required',
        ])){
            return redirect()->back()->withInput();
        };



        // if(!$this->validate([
        //     'username' => 'is_unique[user.username]',
        //     ]
        // )) {
        //     var_dump($validation);
        //     // return redirect()->to('/Pages/daftar')->withInput()->with('validation', $validation);
        // }
        


        // var_dump($this->request->getVar());
        // $time = date('y');

        // //Insert data to Customer Model
        // $customerModel = new CustomerModel();
        // $customer = $customerModel->countAllResults() + 1;
        // $id_customer = "C" . $time . $customer;
        
        // $importCustomer = false;
        // $importCustomer = $this->customerModel->save([
        //     'id_customer' => $id_customer,
        //     'nama' => $this->request->getVar('nama'),
        //     'alamat' => $this->request->getVar('alamat'),
        //     'email' => $this->request->getVar('email'),
        //     'no_hp' => $this->request->getVar('phone'),
        // ]);

        // //Insert data to UserModel
        // $userModel = new UserModel();
        // $user = $userModel->countAllResults() + 1;
        // $id_user = "U" . $time . $user;
        // $level = 3;

        // $importUser = false;
        // $importUser = $this->userModel->save([
        //     'id_user' => $id_user,
        //     'id_pengguna' => $id_customer,
        //     'username' => $this->request->getVar('username'),
        //     'password' => $this->request->getVar('password'),
        //     'level' => $level
        // ]);
        
        // if($importCustomer == true && $importUser == true){
        //     return redirect()->to('/pages/masuk');
        // } 
     }
}
