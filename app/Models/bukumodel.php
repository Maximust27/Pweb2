<?php

namespace App\Models;

use CodeIgniter\Model;

class bukumodel extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'sampul', 'pengarang', 'penulis', 'penerbit', 'tahun_terbit'];

    public function getbuku($idbuku = false)
    {
        if ($idbuku == false) {
            return $this->findAll();
        }

        return $this->where('id_buku', $idbuku)->first();
    }
}