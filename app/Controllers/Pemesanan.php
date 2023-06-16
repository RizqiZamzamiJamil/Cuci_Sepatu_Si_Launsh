<?php

namespace App\Controllers;

use App\Models\PesananModel;
use App\Models\LayananModel;
use App\Models\KategoriBarangModel;
use App\Models\PembayaranModel;
use App\Models\LogPerubahanModel;

class Pemesanan extends BaseController
{
    protected $layananModel;
    protected $kategoriBarangModel;

    protected $pesananModel;
    protected $pembayaranModel;
    protected $logPerubahanModel;
    public function __construct()
    {
        $this->layananModel = new LayananModel();
        $this->kategoriBarangModel = new KategoriBarangModel();
        $this->pesananModel = new PesananModel();
        $this->pembayaranModel = new PembayaranModel();
        $this->logPerubahanModel = new LogPerubahanModel();
    }
    public function index()
    {
        return view('pages/cuci');
    }

    public function totalRealTime()
    {
        $metode = $this->request->getPost('metode'); // ambil data metode

        $layanan = $this->request->getPost('layanan'); // ambil data layanan
        $layananModel = new LayananModel(); // buat objek layanan
        $layanan_fix = $layananModel->getLayananByNama($layanan); // cari layanan berdasarkan nama

        $kategori = $this->request->getPost('kategori'); // ambil data kategori
        $kategoriBarangModel = new KategoriBarangModel(); // buat objek kategori
        $kategori_fix = $kategoriBarangModel->getKategoriByNama($kategori); // cari kategori berdasarkan nama

        $total_harga = $layanan_fix['harga'] + $kategori_fix['harga'];

        $data = [
            'total_harga' => $total_harga,
            'layanan' => $layanan,
            'harga_layanan' => $layanan_fix['harga'],
            'kategori' => $kategori,
            'harga_kategori' => $kategori_fix['harga'],
            'metode' => $metode
        ];

        return $this->response->setJSON($data); // kembalikan data ke halaman cuciSepatu
    }

    public function totalUnyellowing()
    {
        $metode = $this->request->getPost('metode'); // ambil data metode

        $layanan = 'Unyellowing'; // definisikan + inisialisasi
        $layananModel = new LayananModel(); // buat objek layanan
        $layanan_fix = $layananModel->getLayananByNama($layanan); // cari layanan berdasarkan nama

        $kategori = 'Unyellowing Shoes'; // definsikan + inisialisasi
        $kategoriBarangModel = new KategoriBarangModel(); // buat objek kategori
        $kategori_fix = $kategoriBarangModel->getKategoriByNama($kategori); // cari kategori berdasarkan nama

        $total_harga = $layanan_fix['harga'] + $kategori_fix['harga'];

        $data = [
            'total_harga' => $total_harga,
            'layanan' => $layanan,
            'harga_layanan' => $layanan_fix['harga'],
            'kategori' => $kategori,
            'harga_kategori' => $kategori_fix['harga'],
            'metode' => $metode
        ];

        return $this->response->setJSON($data); // kembalikan data ke halaman cuciSepatu
    }

    public function insertPesanan()
    {
        $id_customer = $_SESSION['id_pengguna'];

        $tahun = date('y');
        $pesananModel = new PesananModel(); // buat objek pesanan
        $pesanan = $pesananModel->countAllResults() + 1;
        $id_pesanan = "M" . $tahun . $pesanan;

        date_default_timezone_set('Asia/Jakarta');
        $time = date('Y-m-d h:i:sa');

        $layanan = $this->request->getPost('layanan'); // ambil data dari button layanan
        $layananModel = new LayananModel(); // buat objek layanan
        $layanan_fix = $layananModel->getLayananByNama($layanan); // cari layanan berdasarkan nama
        $id_layanan = $layanan_fix['id_layanan']; // ambil id_layanan dari pencarian

        $kategori = $this->request->getPost('kategori'); // ambil data dari button kategori
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
        $metode = $this->request->getPost('metode');

        $insertDataPesanan = [
            'id_pesanan' => $id_pesanan,
            'id_customer' => $id_customer,
            'id_admin' => $id_admin,
            'id_kategori' => $id_kategori,
            'id_layanan' => $id_layanan,
            'status' => $status,
            'tgl' => $time
        ];

        $insertDataPembayaran = [
            'id_pembayaran' => $id_pembayaran,
            'id_pesanan' => $id_pesanan,
            'status_bayar' => $status_bayar,
            'metode' => $metode,
            'total_harga' => $total_harga
        ];

        $pesananModel->insert($insertDataPesanan); // masukkan data ke tabel pesanan
        $pembayaranModel->insert($insertDataPembayaran); // masukkan data ke tabel pembayaran
        return redirect()->to('pages/profil');
    }

    public function hapusPesanSepatu($id)
    {
        $tahun = date('y');
        $logPerubahanModel = new LogPerubahanModel(); // buat objek pesanan
        $logPerubahan = $logPerubahanModel->countAllResults() + 1;
        $id_logPerubahan = "N" . $tahun . $logPerubahan; // bikin id_logperubahan

        $id_pesanan = $id; // ambil id dari parameter method
        $id_admin = 'A231'; // default id_admin

        date_default_timezone_set('Asia/Jakarta');
        $time = date('Y-m-d h:i:sa'); // ambil tanggal saat ini

        $query = 'delete'; // default query
        $keterangan = 'id' . ' ' . $id_pesanan; // bikin keterangan

        $insertDataLogHapus = [ // array data atau objek
            'id_logperubahan' => $id_logPerubahan,
            'id_admin' => $id_admin,
            'tanggal' => $time,
            'query' => $query,
            'keterangan' => $keterangan
        ];

        $logPerubahanModel->insert($insertDataLogHapus); // masukkan data ke db
        return redirect()->to('dashboard/adminCuciSepatu');
    }

    public function hapusPesanHelm($id)
    {
        $tahun = date('y');
        $logPerubahanModel = new LogPerubahanModel(); // buat objek pesanan
        $logPerubahan = $logPerubahanModel->countAllResults() + 1;
        $id_logPerubahan = "N" . $tahun . $logPerubahan; // bikin id_logperubahan

        $id_pesanan = $id; // ambil id dari parameter method
        $id_admin = 'A231'; // default id_admin

        date_default_timezone_set('Asia/Jakarta');
        $time = date('Y-m-d h:i:sa'); // ambil tanggal saat ini

        $query = 'delete'; // default query
        $keterangan = 'id' . ' ' . $id_pesanan; // bikin keterangan

        $insertDataLogHapus = [ // array data atau objek
            'id_logperubahan' => $id_logPerubahan,
            'id_admin' => $id_admin,
            'tanggal' => $time,
            'query' => $query,
            'keterangan' => $keterangan
        ];

        $logPerubahanModel->insert($insertDataLogHapus); // masukkan data ke db
        return redirect()->to('dashboard/adminCuciHelm');
    }

    public function hapusPesanUnyellowing($id)
    {
        $tahun = date('y');
        $logPerubahanModel = new LogPerubahanModel(); // buat objek pesanan
        $logPerubahan = $logPerubahanModel->countAllResults() + 1;
        $id_logPerubahan = "N" . $tahun . $logPerubahan; // bikin id_logperubahan

        $id_pesanan = $id; // ambil id dari parameter method
        $id_admin = 'A231'; // default id_admin

        date_default_timezone_set('Asia/Jakarta');
        $time = date('Y-m-d h:i:sa'); // ambil tanggal saat ini

        $query = 'delete'; // default query
        $keterangan = 'id' . ' ' . $id_pesanan; // bikin keterangan

        $insertDataLogHapus = [ // array data atau objek
            'id_logperubahan' => $id_logPerubahan,
            'id_admin' => $id_admin,
            'tanggal' => $time,
            'query' => $query,
            'keterangan' => $keterangan
        ];

        $logPerubahanModel->insert($insertDataLogHapus); // masukkan data ke db
        return redirect()->to('dashboard/adminCuciUnyellowing');
    }
}
