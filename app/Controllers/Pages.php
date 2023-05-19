<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Pages extends BaseController
{
    protected $customerModel;
    public function __construct()
    {
        $this->customerModel = new CustomerModel();
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
    public function save()
    {

        $customers = $this->customerModel->countAll();
        $tmp = 0;
/*         foreach ($customers as $row) {
            $tmp++;
        } */
        $time = date('ym');
        $id_customer = "C" . $time . $tmp;

        if (password_verify($this->request->getVar('password'), $this->request->getVar('confirm-password'))) {
            $this->customerModel->save([
                'id_customer' => $id_customer,
                'nama' => $this->request->getVar('nama-depan') . $this->request->getVar('nama-belakang'),
                'alamat' => $this->request->getVar('alamat'),
                'email' => $this->request->getVar('email')
            ]);
        }
        return redirect()->to('/pages');

        /* $customer = $this->customerModel->findAll();
        dd($this->request->getVar('id_customer'));
        $tmp = 0;
        foreach ($customer as $row) {
            $tmp++;
        }
        //$num = mysqli_num_rows($customer);
        $jumlah = $tmp;
        $time = date('ym');
        $id_customer = "C" . $time . $tmp;
        if (($this->request->getVar('password')) == ($this->request->getVar('confirm-password'))) {
            $this->$customer->save([
                'id_customer' => $id_customer,
                'nama' => $this->request->getVar('nama-depan') . $this->request->getVar('nama-belakang'),
                'alamat' => $this->request->getVar('alamat'),
                'email' => $this->request->getVar('email')
            ]);
        }
        return redirect()->to('/pages'); */




        /*$db = \Config\Database::connect();
        
        $id = $db->query("SELECT * FROM customer");
        $num = mysql_num_rows($id);
        $jumlah = $num + 1;
        $time = date('ym');
        $id_customer = "C" . $time . $num;
        $row = ("SELECT id_customer FROM customer");
        $result = mysqli_query($db, $row);
        $num = mysql_num_rows($result);
        $jumlah = $num + 1;
        $time = date('ym');
        $id_customer = "C" . $time . $num;*/
        /*dd($this->request->getVar('nama-depan'));*/
    }
}
