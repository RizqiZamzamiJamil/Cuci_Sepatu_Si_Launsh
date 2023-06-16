<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PesananModel;

class CuciSepatuDashboard extends BaseController
{
    public function index()
    {
        $pesananModel = new PesananModel();
        $pesanan = $pesananModel->getPesananSepatu(); // panggil fungsi untuk mencari pesanan sepatu
        $count = count($pesanan); // fungsi untuk menghitung array di pesanan sepatu

        $data = [
            'title' => 'Cuci Sepatu | Pesanan',
            'pesanan' => $pesanan,
            'count' => $count
        ];
        return view('pages/adminCuciSepatu', $data);
    }

    public function edit($id)
    {
        $pesananModel = new PesananModel();
        $pesanan = $pesananModel->getPesananById($id);
        if ($pesanan) {
            return view('pages/adminPesanan', ['pesanan' => $pesanan]);
        } else {
            return view('pages/adminCuciSepatu');
        }
    }
}
