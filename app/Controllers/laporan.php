<?php

namespace App\Controllers;

use App\Models\LaporanModel;

class laporan extends BaseController
{
    public function __construct()
    {
        $this->LaporanModel = new LaporanModel();
    }

    //menu home
    public function index()
    {

        $title = 'Laporan Warga';
        $model = new LaporanModel();
        $iuran = $model->getLaporan();
        return view('laporan/index', compact('iuran', 'title'));
    }
}
