<?php

namespace App\Controllers;

use App\Models\LayananKonsumenModel;

class LayananKonsumen extends BaseController
{
    protected $layananKonsumenModel;
    public function __construct()
    {
        $this->layananKonsumenModel = new LayananKonsumenModel();
    }

    public function index()
    {
        return view('pages/hubungi');
    }

    public function sendQuestion()
    {
        $time = date('y');

        //Insert data to LayananKonsumenModel
        $layananKonsumenModel = new LayananKonsumenModel();
        $lk = $layananKonsumenModel->countAllResults() + 1;
        $id_lk = "LK" . $time . $lk;

        $nama_depan = $this->request->getVar('pemesan1');
        $nama_belakang = $this->request->getVar('pemesan2');
        $nama_lengkap = $nama_depan . ' ' . $nama_belakang;

        $importLayananKonsumen = false;
        $importLayananKonsumen = $this->layananKonsumenModel->save([
            'id_lk' => $id_lk,
            'nama' => $nama_lengkap,
            'email' => $this->request->getVar('email'),
            'no_hp' => $this->request->getVar('telepon'),
            'pertanyaan' => $this->request->getVar('pertanyaan')
        ]);

        dd($importLayananKonsumen);

        if ($importLayananKonsumen == true) {
            return redirect()->to('/pages/hubungi');
        }
    }
}