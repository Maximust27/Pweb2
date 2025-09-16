<?php

namespace App\Controllers;
use App\models\bukumodel;

class buku extends BaseController
{
    protected $bukumodel;
    public function __construct()
    {
        $this->bukumodel = new bukumodel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Buku',
            'buku' => $this->bukumodel->getbuku()
        ];

        return view('buku/index', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Buku',
            'buku' => $this->bukumodel->getbuku($id)
        ];

        return view('buku/detail', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Form Tambah Data Buku',
            'validation' => \Config\Services::validation()
        ];
        return view('buku/tambah', $data);
    }
    public function simpan()
    {
        if (!$this->validate(
            [
                'judul' => [
                    'rules' => 'required',
                    'errors' => ['required' => '{field} harus di isi']
                ]
            ]
        )) {
            $validation = \Config\Services::validation();
            return redirect()->to('/buku/tambah')->withInput()->with('validation', $validation);
        }
        $this->bukumodel->save(
        [
                'judul' => $this->request->getVar('judul'),
                'pengarang' => $this->request->getVar('pengarang'),
                'sampul' => $this->request->getVar('sampul'),
                'tahun' => $this->request->getVar('tahun')
            ]
        );

        return redirect()->to('/buku');
    }
}
