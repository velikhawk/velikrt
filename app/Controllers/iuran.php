<?php

namespace App\Controllers;

use App\Models\IuranModel;
use App\Models\ModelWarga;

class iuran extends BaseController
{
    public function __construct()
    {
        $this->IuranModel = new IuranModel();
        $this->ModelWarga = new ModelWarga();
    }

    //menu home
    public function index()
    {
        $currentPage = $this->request->getVar('page_iuran') ? $this->request->getVar('page_iuran') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $iuran = $this->IuranModel->search($keyword);
        } else {
            $iuran = $this->IuranModel;
        }
        $data = [
            'title' => 'data iuran',
            //'iuran' => $this->IuranModel->getIuran()
            'iuran' => $this->IuranModel->paginate(6, 'iuran'),
            'pager' => $this->IuranModel->pager,
            'currentPage' => $currentPage,
        ];
        return view('iuran/index', $data);
    }
    public function tambah()
    {

        $data = [
            'title' => 'tambah iuran',
            'warga_id' => $this->ModelWarga->AllWarga(),
        ];
        return view('iuran/tambah', $data);
    }
    public function simpan()
    {
        $this->IuranModel->save([
            'keterangan' => $this->request->getVar('keterangan'),
            'tanggal' => $this->request->getVar('tanggal'),
            'bulan' => $this->request->getVar('bulan'),
            'tahun' => $this->request->getVar('tahun'),
            'jumlah' => $this->request->getVar('jumlah'),
            'warga_id' => $this->request->getVar('warga_id'),
        ]);
        //flashdata
        session()->setFlashdata('pesan', 'data berhasil ditambahkan');
        return redirect()->to('/iuran');
    }
    public function hapus($id)
    {
        $this->IuranModel->delete($id);
        //flasdata
        session()->setFlashdata('pesan', 'data sudah hilang');
        return redirect()->to('/iuran');
    }
    public function ubah($id)
    {
        //mengambil data input saat melakukan validasi
        session();
        $data = [
            'title' => 'Ubah Data Kas',
            'validation' => \Config\Services::validation(),
            'iuran' => $this->IuranModel->getIuran($id),
            'warga_id' => $this->ModelWarga->AllWarga(),
        ];

        return view('iuran/ubah', $data);
    }
    public function update($id)
    {
        $this->IuranModel->update($id, [
            'keterangan' => $this->request->getVar('keterangan'),
            'tanggal' => $this->request->getVar('tanggal'),
            'bulan' => $this->request->getVar('bulan'),
            'tahun' => $this->request->getVar('tahun'),
            'jumlah' => $this->request->getVar('jumlah'),
            'warga_id' => $this->request->getVar('warga_id'),
        ]);
        //flashdata
        session()->setFlashdata('pesan', 'data berhasil diubah');
        return redirect()->to('/iuran');
    }
}
