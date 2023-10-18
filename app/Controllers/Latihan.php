<?php

namespace App\Controllers;

class Latihan extends BaseController
{
    public function index()
    {
        // return view('home');
        echo 'Saat ini kita sedang berada pada Controller Latihan';
    }
    public function codeigniter(){
        echo 'Saat ini  kita sedang berada pada Controller Latihan dan function codeigniter';
    }
    public function menampilkan_view(){
        return view('halaman_latihan');
    }
}