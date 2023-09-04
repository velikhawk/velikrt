<?php

namespace App\Controllers;

use App\Models\WargaModel;

class warga extends BaseController
{
    public function __construct()
    {
        $this->WargaModel = new WargaModel();
    }

    //menu home
    public function index()
    {
        $currentPage = $this->request->getVar('page_warga') ? $this->request->getVar('page_warga') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $warga = $this->WargaModel->search($keyword);
        } else {
            $warga = $this->WargaModel;
        }

        $data = [
            'title' => 'daftar warga',
            //'warga' => $this->WargaModel->getWarga()
            'warga' => $this->WargaModel->paginate(6, 'warga'),
            'pager' => $this->WargaModel->pager,
            'currentPage' => $currentPage,
        ];
        return view('warga/index', $data);
    }

    public function tambah()
    {
        //mengambil data input saat melakukan validasi
        session();
        $data = [
            'title' => 'Tambah Warga',
            'validation' => \Config\Services::validation()
        ];

        return view('warga/tambah', $data);
    }
    public function simpan()
    {
        //validasi input data
        if (!$this->validate([
            'nik' => [
                'rules' => 'required|is_unique[warga.nik]',
                'errors' => [
                    'required' => '{field}  wajib di isi',
                    'is_unique' => '{field} sudah ada'
                ]
            ]
        ])) {


            //menampilkan pesan kesalahan
            $validation = \Config\Services::validation();

            return redirect()->to('/warga/tambah')
                ->withInput()->with('validation', $validation);
        }

        $this->WargaModel->save([
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'kelamin' => $this->request->getVar('kelamin'),
            'alamat' => $this->request->getVar('alamat'),
            'no_rumah' => $this->request->getVar('no_rumah'),
            'status' => $this->request->getVar('status'),
        ]);
        //flashdata
        session()->setFlashdata('pesan', 'data berhasil ditambahkan');
        return redirect()->to('/warga');
    }

    public function hapus($warga_id)
    {
        $this->WargaModel->delete($warga_id);
        //flasdata
        session()->setFlashdata('pesan', 'data sudah hilang');
        return redirect()->to('/warga');
    }
    public function ubah($warga_id)
    {
        //mengambil data input saat melakukan validasi
        session();
        $data = [
            'title' => 'Ubah Data Warga',
            'validation' => \Config\Services::validation(),
            'warga' => $this->WargaModel->getWarga($warga_id)
        ];

        return view('warga/ubah', $data);
    }
    public function update($warga_id)
    {
        $this->WargaModel->update($warga_id, [
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'kelamin' => $this->request->getVar('kelamin'),
            'alamat' => $this->request->getVar('alamat'),
            'no_rumah' => $this->request->getVar('no_rumah'),
            'status' => $this->request->getVar('status'),
        ]);
        //flashdata
        session()->setFlashdata('pesan', 'data berhasil diubah');
        return redirect()->to('/warga');
    }
}
