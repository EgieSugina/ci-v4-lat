<?php
namespace App\Controllers;

use App\Models\MatakuliahModel;

class Matakuliah extends BaseController
{
    protected $matakuliahmodel;
    public function __construct()
    {
        $this->matakuliahmodel = new MatakuliahModel();
    }
    public function index()
    {
        $matakuliah = $this->matakuliahmodel->findAll();
        $data = [
            'title' => 'Data Matakuliah',
            'matakuliah' => $matakuliah
        ];
        echo view('matakuliah/data_matakuliah', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Matakuliah',
        ];
        echo view('matakuliah/form_tambah', $data);
    }
    public function simpan()
    {
        // Save the data
        $saved = $this->matakuliahmodel->save([
            'kode_mk' => $this->request->getVar('kode_mk'),
            'nama_mk' => $this->request->getVar('nama_mk'),
            'sks' => $this->request->getVar('sks'),
            'ruangan' => $this->request->getVar('ruangan')
        ]);
        if ($saved) {
            $toastMessage = 'Data berhasil disimpan!';
        } else {
            $toastMessage = 'Gagal menyimpan data.';
        }
        $session = session();
        $session->setFlashdata('toast', $toastMessage);

        return redirect()->to('matakuliah');
    }

    public function edit($id_mk)
    {
        $matakuliah = $this->matakuliahmodel->data_mk($id_mk);
        $data = [
            'title' => 'Edit Data Matakuliah',
            'matakuliah' => $matakuliah
        ];
        echo view('matakuliah/form_edit', $data);
    }
    public function update()
    {
        $id_mk = $this->request->getVar('id_mk');
        $data = [
            'kode_mk' => $this->request->getVar('kode_mk'),
            'nama_mk' => $this->request->getVar('nama_mk'),
            'sks' => $this->request->getVar('sks'),
            'ruangan' => $this->request->getVar('ruangan')
        ];
        $update = $this->matakuliahmodel->update_data($data, $id_mk);
        if ($update) {
            $toastMessage = 'Data berhasil di ganti dan disimpan!';
        } else {
            $toastMessage = 'Gagal merubah data.';
        }
        $session = session();
        $session->setFlashdata('toast', $toastMessage);
        return redirect()->to('matakuliah');
    }
    public function delete($id_mk)
    {
        $hapus = $this->matakuliahmodel->delete_data($id_mk);
        if ($hapus) {
            $toastMessage = 'Data berhasil di hapus!';
        } else {
            $toastMessage = 'Gagal menghapus data.';
        }
        $session = session();
        $session->setFlashdata('toast', $toastMessage);
        return redirect()->to('matakuliah');
    }
}





