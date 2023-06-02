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
        $validation = \Config\Services::validation();
        $validation->setRules([
            'telepon' => 'required|numeric|min_length[5]|max_length[13]'
        ]);

        if (!$this->validate($validation->getRules())) {
            // Jika validasi gagal, kembalikan pesan error
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $time = date('y');

        $layananKonsumenModel = new LayananKonsumenModel();
        $lk = $layananKonsumenModel->countAllResults() + 1;
        $id_lk = "LK" . $time . $lk;

        $nama_depan = $this->request->getVar('pemesan1');
        $nama_belakang = $this->request->getVar('pemesan2');
        $nama_lengkap = $nama_depan . ' ' . $nama_belakang;

        //Insert data to LayananKonsumenModel
        $insertData = [
            'id_lk' => $id_lk,
            'nama' => $nama_lengkap,
            'email' => $this->request->getVar('email'),
            'telepon' => $this->request->getVar('telepon'),
            'pertanyaan' => $this->request->getVar('pertanyaan')
        ];

        $layananKonsumenModel->insert($insertData); // memasukkan data ke db
        return redirect()->to('pages/hubungi');
    }
}