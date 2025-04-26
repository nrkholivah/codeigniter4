<?php

namespace App\Controllers;

use App\Models\mkModel;

class  MataKuliah extends BaseController
{
    public function __construct()
    {
        helper('url'); // Sekali load untuk seluruh method
    }
    public function home(): string
    {
        $courseModel = new mkModel();
        $data['courses'] = $courseModel->findAll(); //buat nampilin model
        return view('matakuliah_view/home',  $data);
    }
    public function matkul($id): string
    {
        $courseModel = new mkModel();
        $data['courses'] = $courseModel->findAll();
        $data['matkul'] = $courseModel->find($id); // <- ini penting

        if (!$data['matkul']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Mata Kuliah Tidak Ditemukan");
        }
        return view('matakuliah_view/index_matakuliah', $data); // <- ini juga
    }
}
