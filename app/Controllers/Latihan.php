<?php

namespace App\Controllers;

use App\Models\LatihanModel;

class Latihan extends BaseController
{
    protected $latihanmodel;
    public function __construct()
    {
        $this->latihanmodel = new LatihanModel();
    }
    // public function index()
    // {
    //     // return view('home');
    //     echo 'Saat ini kita sedang berada pada Controller Latihan';
    // }
    // public function codeigniter()
    // {
    //     echo 'Saat ini  kita sedang berada pada Controller Latihan dan function codeigniter';
    // }
    public function menampilkan_view()
    {
        echo "Daftar Mahasiswa";
        echo "<br><br>";
        $data['mahasiswa'] = $this->latihanmodel->findAll();
        return view('halaman_view', $data);
    }
    // public function tampil_view()
    // {
    //     echo view('layouts/header');
    //     echo view('layouts/navigation');
    //     echo view('content');
    //     echo view('layouts/footer');
    // }
    // public function tampil_view2()
    // {
    //     $data = [
    //         'title' => 'Data Mahasiswa',
    //         'content' => 'Isi data mahasiswa'
    //     ];
    //     echo view('tampil_data', $data);
    // }
}