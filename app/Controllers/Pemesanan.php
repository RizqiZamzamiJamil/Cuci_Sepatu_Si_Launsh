<?php

namespace App\Controllers;

use App\Models\PesananModel;
//use App\Models\CustomerModel;
use App\Models\LayananModel;
use App\Models\KategoriBarangModel;
use App\Models\PembayaranModel;


//use CodeIgniter\Controller;

//use CodeIginter\Session\Session;

class Pemesanan extends BaseController
{
    //protected $customerModel;
    protected $layananModel;
    protected $kategoriBarangModel;

    protected $pesananModel;
    protected $pembayaranModel;
    public function __construct()
    {
        //$this->customerModel = new CustomerModel();
        $this->layananModel = new LayananModel();
        $this->kategoriBarangModel = new KategoriBarangModel();
        $this->pesananModel = new PesananModel();
        $this->pembayaranModel = new PembayaranModel();
    }
    public function index()
    {
        return view('pages/cuci');
    }

    public function totalRealTime()
    {
        $layanan = $this->request->getVar('layanan'); // ambil data dari button layanan
        $layananModel = new LayananModel(); // buat objek layanan
        $layanan_fix = $layananModel->getLayananByNama($layanan); // cari layanan berdasarkan nama

        $kategori = $this->request->getVar('kategori'); // ambil data dari button kategori
        $kategoriBarangModel = new KategoriBarangModel(); // buat objek kategori
        $kategori_fix = $kategoriBarangModel->getKategoriByNama($kategori); // cari kategori berdasarkan nama

        $total_harga = $layanan_fix['harga'] + $kategori_fix['harga'];

        return $this->response->setJSON(['total_harga' => $total_harga]);
    }

    public function insertPesanan()
    {
        $id_customer = $_SESSION['id_pengguna'];

        $tahun = date('y');
        $pesananModel = new PesananModel(); // buat objek pesanan
        $pesanan = $pesananModel->countAllResults() + 1;
        $id_pesanan = "M" . $tahun . $pesanan;
        //dd($id_pesanan);

        date_default_timezone_set('Asia/Jakarta');
        $time = date('Y-m-d h:i:sa');

        $layanan = $this->request->getVar('layanan'); // ambil data dari button layanan
        $layananModel = new LayananModel(); // buat objek layanan
        $layanan_fix = $layananModel->getLayananByNama($layanan); // cari layanan berdasarkan nama
        $id_layanan = $layanan_fix['id_layanan']; // ambil id_layanan dari pencarian

        $kategori = $this->request->getVar('kategori'); // ambil data dari button kategori
        $kategoriBarangModel = new KategoriBarangModel(); // buat objek kategori
        $kategori_fix = $kategoriBarangModel->getKategoriByNama($kategori); // cari kategori berdasarkan nama
        $id_kategori = $kategori_fix['id_kategori']; // ambil id_kategori dari pecarian

        $id_admin = 'A231';
        $status = 'belum di-pickup';

        $pembayaranModel = new PembayaranModel();
        $pembayaran = $pembayaranModel->countAllResults() + 1;
        $id_pembayaran = "Y" . $tahun . $pembayaran;
        $status_bayar = 'sudah';
        $total_harga = $layanan_fix['harga'] + $kategori_fix['harga'];

        $insertDataPesanan = false;
        $insertDataPesanan = [
            'id_pesanan' => $id_pesanan,
            'id_customer' => $id_customer,
            'id_admin' => $id_admin,
            'id_kategori' => $id_kategori,
            'id_layanan' => $id_layanan,
            'status' => $status,
            'tgl' => $time
        ];

        $insertDataPembayaran = false;
        $insertDataPembayaran = [
            'id_pembayaran' => $id_pembayaran,
            'id_pesanan' => $id_pesanan,
            'status_bayar' => $status,
            'total_harga' => $total_harga
        ];

        if ($insertDataPesanan == true && $insertDataPembayaran == true) {
            return redirect()->to('pages/profil');
        }
    }
}
