<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PesananModel;

class UnyellowingDashboard extends BaseController
{
    public function index()
    {
        $pesananModel = new PesananModel();
        $pesanan = $pesananModel->getPesananUnyellowing(); // panggil fungsi untuk mencari pesanan unyellowing
        $count = count($pesanan); // fungsi untuk menghitung array di pesanan unyellowing

        $data = [
            'title' => 'Cuci Unyellowing | Pesanan',
            'pesanan' => $pesanan,
            'count' => $count
        ];
        return view('pages/adminCuciUnyellowing', $data);
    }
}
