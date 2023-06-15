<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CuciSepatuDashboard extends BaseController
{
    public function index()
    {
        return view('pages/adminCuciSepatu');
    }

    public function testt()
    {
        return view('pages/testt');
    }
}
