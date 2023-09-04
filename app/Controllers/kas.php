<?php

namespace App\Controllers;

use App\Models\WargaModel;
use App\Models\IuranModel;

class kas extends BaseController
{
    public function index()
    {
        $warga = new WargaModel();
        $iuran = new IuranModel();

        $data['warga'] = $warga->countAllResults();
        $data['iuran'] = $iuran->countAllResults();
        return view('kas/home', $data);
    }

    //--------------------------------------------------------------------


}
