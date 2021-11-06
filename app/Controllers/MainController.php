<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelOtentikasi;

class MainController extends BaseController
{
    public function __construct() {
        $this->ModelOtentikasi = new ModelOtentikasi();
    }
    public function index()
    {
        return view('dashboard');
    }

    public function biodata()
    {
        return view('biodata');
    }

    public function get_regencies($code)
    {
        $results = $this->ModelOtentikasi->regencies_with_code($code);
        return $this->response->setJSON($results);
    }
}
