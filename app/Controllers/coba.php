<?php

namespace App\Controllers;

class coba extends BaseController
{
    public function index()
    {
        echo "ini adalah halaman coba";
    }
    public function about($nama = '')
    {
        echo "ini adalah halaman coba dan nama saya $nama";
    }
}
