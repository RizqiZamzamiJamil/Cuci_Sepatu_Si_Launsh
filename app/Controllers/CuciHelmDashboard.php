<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PesananModel;

class CuciHelmDashboard extends BaseController
{
    public function index()
    {
        $pesananModel = new PesananModel();
        $pesanan = $pesananModel->getPesananHelm(); // panggil fungsi untuk mencari pesanan helm
        $count = count($pesanan); // fungsi untuk menghitung array di pesanan helm

        $data = [
            'title' => 'Cuci Helm | Pesanan',
            'pesanan' => $pesanan,
            'count' => $count
        ];
        return view('pages/adminCuciHelm', $data);
    }
}
