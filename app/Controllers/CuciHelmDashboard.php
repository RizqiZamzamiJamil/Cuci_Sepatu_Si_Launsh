<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CuciHelmDashboard extends BaseController
{
    public function index()
    {
        return view('pages/adminCuciHelm');
    }
}
