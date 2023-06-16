<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table = 'pesanan';
    protected $primaryKey = 'id_pesanan';
    protected $allowedFields = ['id_pesanan', 'id_customer', 'id_admin', 'id_kategori', 'id_layanan', 'status', 'tgl'];

    public function getPesananSepatu()
    {
        return $this->select('pesanan.id_pesanan, pesanan.status, pesanan.tgl, customer.nama as nama, customer.alamat as alamat, customer.no_hp') // kolom yang ingin ditampilkan
            ->join('customer', 'customer.id_customer = pesanan.id_customer', 'inner') // id untuk join
            ->where('pesanan.id_layanan', 'L231') // kondisi, dimana parameter pertama untuk kolom yg ada di tabel dan paremeter kedua untuk value pembanding
            ->orWhere('pesanan.id_layanan', 'L232')
            ->orWhere('pesanan.id_layanan', 'L233')
            ->findAll(); // untuk menemukan semua datanya
    }

    public function getPesananHelm()
    {
        return $this->select('pesanan.id_pesanan, pesanan.status, pesanan.tgl, customer.nama as nama, customer.alamat as alamat, customer.no_hp') // kolom yang ingin ditampilkan
            ->join('customer', 'customer.id_customer = pesanan.id_customer', 'inner') // id untuk join
            ->where('pesanan.id_layanan', 'L234') // kondisi, dimana parameter pertama untuk kolom yg ada di tabel dan paremeter kedua untuk value pembanding
            ->orWhere('pesanan.id_layanan', 'L235')
            ->orWhere('pesanan.id_layanan', 'L236')
            ->findAll(); // untuk menemukan semua datanya
    }

    public function getPesananUnyellowing()
    {
        return $this->select('pesanan.id_pesanan, pesanan.status, pesanan.tgl, customer.nama as nama, customer.alamat as alamat, customer.no_hp') // kolom yang ingin ditampilkan
            ->join('customer', 'customer.id_customer = pesanan.id_customer', 'inner') // id untuk join
            ->where('pesanan.id_layanan', 'L237') // kondisi, dimana parameter pertama untuk kolom yg ada di tabel dan paremeter kedua untuk value pembanding
            ->findAll(); // untuk menemukan semua datanya
    }

    public function getStatusMenunggu()
    {
        return $this->select('pesanan.id_pesanan, pesanan.status, pesanan.tgl, customer.nama as nama, customer.alamat as alamat, customer.no_hp') // kolom yang ingin ditampilkan
            ->join('customer', 'customer.id_customer = pesanan.id_customer', 'inner') // id untuk join
            ->where('status', 'Menunggu') // kondisi, dimana parameter pertama untuk kolom yg ada di tabel dan paremeter kedua untuk value pembanding
            ->findAll(); // untuk menemukan semua datanya
    }

    public function getPesananById($id)
    {
        return $this->find($id);
    }
}
