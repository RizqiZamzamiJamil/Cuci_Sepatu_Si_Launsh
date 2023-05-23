<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use App\Models\UserModel;


class Pages extends BaseController
{
    protected $customerModel;
    protected $userModel;
    public function __construct()
    {
        $this->customerModel = new CustomerModel();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Home | SI LAUNSH'
        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'Tentang Kami | SI LAUNSH'
        ];
        return view('pages/about', $data);
    }
    public function testimoni()
    {
        $data = [
            'title' => 'Testimoni | SI LAUNSH'
        ];
        return view('pages/testimoni', $data);
    }
    public function daftar()
    {
        $data = [
            'title' => 'Daftar | SI LAUNSH'
        ];
        return view('pages/daftar', $data);
    }
    public function masuk()
    {
        $data = [
            'title' => 'Masuk | SI LAUNSH'
        ];
        return view('pages/masuk', $data);
    }
    // public function saveDaftar()
    // {
    //     /*$db = \Config\Database::connect();
        
    //     $id = $db->query("SELECT * FROM customer");
    //     $num = mysql_num_rows($id);
    //     $jumlah = $num + 1;
    //     $time = date('ym');
    //     $id_customer = "C" . $time . $num;
    //     $row = ("SELECT id_customer FROM customer");
    //     $result = mysqli_query($db, $row);
    //     $num = mysql_num_rows($result);
    //     $jumlah = $num + 1;
    //     $time = date('ym');
    //     $id_customer = "C" . $time . $num;*/

    //     $customer = $this->customerModel->findAll();
    //     dd($this->request->getVar('id_customer'));
    //     $tmp = 0;
    //     foreach ($customer as $row) {
    //         $tmp++;
    //     }
    //     //$num = mysqli_num_rows($customer);
    //     $jumlah = $tmp;
    //     $time = date('ym');
    //     $id_customer = "C" . $time . $tmp;
    //     if (($this->request->getVar('password')) == ($this->request->getVar('confirm-password'))) {
    //         $this->customerModel->save([
    //             'id_customer' => $id_customer,
    //             'nama' => $this->request->getVar('nama-depan') . $this->request->getVar('nama-belakang'),
    //             'alamat' => $this->request->getVar('alamat'),
    //             'email' => $this->request->getVar('email')
    //         ]);
    //     }
    //     return redirect()->to('/pages');
    //     /*dd($this->request->getVar('nama-depan'));*/
    // }

    public function saveDaftar(){
        // dd($this->request->getVar());
        $time = date('y');

        //Insert data to Customer Model
        $customerModel = new CustomerModel();
        $customer = $customerModel->countAllResults() + 1;
        $id_customer = "C" . $time . $customer;
        
        $importCustomer = false;
        $importCustomer = $this->customerModel->save([
            'id_customer' => $id_customer,
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'email' => $this->request->getVar('email'),
            'no_hp' => $this->request->getVar('phone'),
        ]);

        //Insert data to UserModel
        $userModel = new UserModel();
        $user = $userModel->countAllResults() + 1;
        $id_user = "U" . $time . $user;
        $level = 3;

        $importUser = false;
        $importUser = $this->userModel->save([
            'id_user' => $id_user,
            'id_pengguna' => $id_customer,
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'level' => $level
        ]);
        
        if($importCustomer == true && $importUser == true){
            return redirect()->to('/pages/masuk');
        }else{
            return redirect()->to('/pages/daftar');
        }
        
    }
}