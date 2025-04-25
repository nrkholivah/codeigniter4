<?php

namespace App\Models;

use CodeIgniter\Model;

class mkModel extends Model
{
    protected $table      = 'mata_kuliah';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nama_kelas',
        'deskripsi',
        'link_cr',
        'link_wa',
        'informasi_dosen',
        'hasil_pembelajaran',
        'gambar',
    ];
}
