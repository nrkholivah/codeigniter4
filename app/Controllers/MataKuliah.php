<?php

namespace App\Controllers;

class MataKuliah extends BaseController
{
    public function home(): string
    {
        helper('url');
        return view('matakuliah/home');
    }
    public function pemweb()
    {
        return view('matakuliah/pemweb');
    }
    public function rpl()
    {
        return view('matakuliah/rpl');
    }
    public function sim()
    {
        return view('matakuliah/sim');
    }
    public function metopen()
    {
        return view('matakuliah/metopen');
    }
}
