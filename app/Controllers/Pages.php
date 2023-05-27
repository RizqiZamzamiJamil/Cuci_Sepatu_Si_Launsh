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
        session();
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

    public function cekData(){
        $validation = session('validation'); 
        dd($validation);

    }
}
