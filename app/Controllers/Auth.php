<?php

namespace App\Controllers;

use App\Models\UserModel;

//use CodeIgniter\Controller;

//use CodeIginter\Session\Session;

class Auth extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function login()
    {
        return view('masuk');
    }

    public function processLogin()
    {
        $session = session();
        $userModel = new UserModel();

        $username = $this->request->getPost('username'); // ambil nilai username
        $password = $this->request->getPost('password'); // ambil nilai pwd

        $user = $userModel->getUserByUsername($username); // panggil fungsi untuk mencari username

        if ($user && (($password === $user['password']))) { // validasi password 
            $sessionData = [
                'id_user' => $user['id_user'],
                'id_pengguna' => $user['id_pengguna'],
                'username' => $user['username'],
                'level' => $user['level'],
                'isLoggedIn' => true
            ];

            $session->set($sessionData); // menyimpan data ke session

            //Redirect ke halaman sesuai level pengguna
            if ($user['level'] == '1') {
                return redirect()->to('owner/dashboard');
            } else if ($user['level'] == '2') {
                return redirect()->to('admin/dashboard');
            } else {
                return redirect()->to('/');
            }
        } else {
            $session->setFlashdata('message', 'Username or Password is incorect!');
            return redirect()->to('pages/masuk');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('pages/masuk');
    }
}