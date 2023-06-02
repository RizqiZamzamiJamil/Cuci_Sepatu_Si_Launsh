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
            'title' => 'Daftar | SI LAUNSH',
            'validation' => \Config\Services::validation()
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
    public function hubungi()
    {
        $data = [
            'title' => 'Hubungi | SI LAUNSH'
        ];
        return view('pages/hubungi', $data);
    }
    public function cuci()
    {
        $data = [
            'title' => 'Cuci | SI LAUNSH'
        ];
        return view('pages/cuci', $data);
    }
    public function cuciSepatu()
    {
        $data = [
            'title' => 'Cuci Sepatu'
        ];
        return view('pages/cuciSepatu', $data);
    }
    public function cuciHelm()
    {
        $data = [
            'title' => 'Cuci Helm'
        ];
        return view('pages/cuciHelm', $data);
    }
    public function cuciYellowing()
    {
        $data = [
            'title' => 'Yellowing'
        ];
        return view('pages/cuciYellowing', $data);
    }

    public function profil()
    {
        $username = $_SESSION['username']; // ambil username dari session
        $id_pengguna = $_SESSION['id_pengguna']; //ambil id_pengguna dari session

        $userModel = new UserModel(); // buat objek
        $customerModel = new CustomerModel(); // buat objek

        $user = $userModel->getUserByUsername($username); //panggil fungsi untuk mencari user
        $password = $user['password'];

        $cust = $customerModel->getCustomerByIdPengguna($id_pengguna); // panggil fungsi untuk mencari customer
        $nama = $cust['nama'];
        $alamat = $cust['alamat'];
        $email = $cust['email'];
        $tgl_lahir = $cust['tgl_lahir'];
        $no_hp = $cust['no_hp'];
        $jk = $cust['jk'];
        if ($jk == 'L') {
            $jk = 'Laki-laki';
        } else if ($jk == 'P') {
            $jk = 'Perempuan';
        }
        $foto = $cust['foto'];

        $data = [
            'title' => 'Profil | SI LAUNSH',
            'password' => $password,
            'nama' => $nama,
            'alamat' => $alamat,
            'email' => $email,
            'tgl_lahir' => $tgl_lahir,
            'no_hp' => $no_hp,
            'jk' => $jk,
            'foto' => $foto
        ];

        return view('pages/profil', $data);
    }

    public function cekData()
    {
        $validation = session()->getFlashdata();
        dd($validation);

    }

    public function saveDaftar()
    {
        $data = [
            'title' => 'Daftar | SI LAUNSH',
        ];

        if (
            !$this->validate([
                'nama' => [
                    'label' => 'Nama Lengkap',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama Lengkap harus di isi!'
                    ]
                ],
                'username' => [
                    'label' => 'Username',
                    'rules' => 'required|is_unique[user.username]',
                    'errors' => [
                        'required' => 'Username harus di isi!',
                        'is_unique' => 'Username anda sudah digunakan!'
                    ]
                ],
                'email' => [
                    'label' => 'Email',
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'Email harus di isi!',
                        'valid_email' => 'Email anda tidak sesuai format!'
                    ]
                ],
                'phone' => [
                    'label' => 'Nomor Telepon',
                    'rules' => 'required|numeric|min_length[5]|max_length[13]',
                    'errors' => [
                        'required' => 'Nomor Telepon harus di isi!',
                        'numeric' => 'Nomor Telepon harus berupa angka!',
                        'min_length' => 'Nomor telepon terlalu sedikit (12 angka)',
                        'max_length' => 'Nomor telepon terlalu banyak (12 angka)'
                    ]
                ],
                'password' => [
                    'label' => 'Password',
                    'rules' => 'required|greater_than_equal_to[8]',
                    'errors' => [
                        'required' => 'Password harus di isi!',
                        'greater_than_equal_to' => 'Password minimal 8 karakter',
                    ]
                ],
                'confirm_password' => [
                    'label' => 'Konfirmasi Password',
                    'rules' => 'required|greater_than_equal_to[8]|matches[password]',
                    'errors' => [
                        'required' => 'Confirm Password harus di isi!',
                        'greater_than_equal_to' => 'Password minimal 8 karakter',
                        'matches' => 'Tidak sesuai dengan Password',

                    ]
                ],
                'alamat' => [
                    'label' => 'Alamat',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Alamat harus di isi!'
                    ]
                ],
            ])
        ) {
            $data['validation'] = $this->validator;
            return view('pages/daftar', $data);
        }
        ;


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

        if ($importCustomer == true && $importUser == true) {
            return redirect()->to('/pages/masuk');
        }
    }
}